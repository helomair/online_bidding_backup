<?php

use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adm_default = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => 'aaaaaaaa',
            'phone' => 'qweqwe' 
        ];
        $admin = User::create($adm_default);
        $admin->update(['is_adm' => 1]);
        // $this->call(UsersTableSeeder::class);
    }
}
