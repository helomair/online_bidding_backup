<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon; 
use App\Product; 
use Illuminate\Support\Str;

class CheckEndBidding extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bidding:end';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '搜尋已結標商品';

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
        $now_time = Carbon::now();
        $products = Product::where('nickname_changed',false)->where('uid','!=','0')->where('end_time','<',$now_time)->get();
        foreach($products as $product)
        {
            $user = $product->winner;
            $new_nickname = Str::random(8); 
            $user->update(['nickname' => $new_nickname]);
            $product->update(['nickname_changed' => true]);
        } 
    }
}
