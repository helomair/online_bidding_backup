<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\AuctionAuto; 
use Carbon\Carbon;
use DB;


class Auto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auction:auto';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '自動下標功能';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
    //    DB::table('temp_log')->insert(['echos' => 'Begins']); 
        $autos = AuctionAuto::where('times','>','0')->get(); 
        $time = Carbon::now();
        $diff_this_time = array();
        foreach($autos as $auto)
        {
            $product = $auto->product;  //產品
            
            if($product == null || $product->end_time < $time)
            {
                $auto->delete();
                continue; 
            }

            $user = $auto->user; //使用者
            $auto_start = $product->end_time->diffInSeconds($time,false); //時間相差
            
            $diff_this_time = array_add($diff_this_time, $product->id, $auto_start); 

            if( ($diff_this_time[$product->id] < 0 && $diff_this_time[$product->id] >= (-30)) && ($time >= $product->start_time) && ($user->balance > 0) )
            {
                echo $product->id . "  " . $diff_this_time[$product->id] . "\n";
                if ( ($product->cur_cost >= $auto->start_cost) && ($product->cur_cost + $product->cost <= $auto->end_cost) )
                {
                    $auto->update( ['times' => ($auto->times - 1) ] ); //次數-1
                    $product->users()->attach($user->id, [
                        'cost' => $product->cost,                              //下標金額
                        'lasted_cost' => $product->cur_cost + $product->cost   //後標後金額
                    ]);
                    $product->update([
                        'cur_cost' => ($product->cur_cost + $product->cost),   //目前最高金額
                        'end_time' => $product->end_time->addSeconds(20)       //倒數階段加時
                    ]);
                    $user->update([ 'balance' => $user->balance - 1 ]);        //代幣-1
                }
            }
        }

    }

}
