<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\AuctionAuto; 
use App\Product;
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
        foreach($autos as $auto)
        {
            $product = Product::find($auto->pid);
            $auto_start = $time->diffInSeconds($product->end_time,false);
            if( ($auto_start < 0 && $auto_start >= (-10)) && $time->gte($product->start_time) )
            {
                if ( ($product->cur_cost >= $auto->start_cost) && ($product->cur_cost <= $auto->end_cost) )
                {
                    $auto->update( ['times' => ($auto->times - 1) ] );
                    $product->update([
                        'cur_cost' => ($product->cur_cost + $product->cost),
                        'end_time' => $product->end_time->addMinutes(10)
                    ]);
                }
            }
        }
    }

}
