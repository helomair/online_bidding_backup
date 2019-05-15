<?php
use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        $adm_default = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('aaaaaaaa'),
            'phone' => 'qweqwe' 
        ];
        $admin = User::create($adm_default);
        $admin->update(['is_adm' => 1]);
    }
}
