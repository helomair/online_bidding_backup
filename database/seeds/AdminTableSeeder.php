<?php
use Illuminate\Database\Seeder;
use App\User;

class AdminTableSeeder extends Seeder {

    public function run()
    {
        $adm_default = [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('IBid_Admin_'),
            'phone' => '0988397679' 
        ];
        $admin = User::create($adm_default);
        $admin->update(['is_adm' => 1]);
    }
}
