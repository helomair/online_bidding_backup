<?php

namespace Tests\Feature;

use Carbon\Carbon;
use App\User;
use App\Product;
use Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    //use DatabaseMigrations;
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // Given 10 Users with 5 coins each,
        // 1 Product will end in 5 minutes
        $users = factory(User::class, 10)->create();

        $product = factory(Product::class)->create([
            'view_time' => Carbon::now(),
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now()->addMinutes(5)
        ]);
        // When
        for ($i = 0; $i < 50  ; $i++) {
            Auth::login($users[ $i%10 ]);
            $response = $this->get(route('bidding', $product->id));
            Auth::logout();
        }
        // Then
        
        $product = Product::first();
        $this->assertEquals(50000, $product->cur_cost);

        //$response->assertSee();
    }
}
