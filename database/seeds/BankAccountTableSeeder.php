<?php
use Illuminate\Database\Seeder;
use App\BankAccount;

class BankAccountTableSeeder extends Seeder {

    public function run()
    {
        $bank_default = [
            'account' => '1111 1111 1111 1111',
            'bank_name' => 'Bank Test',
            'holder_name' => 'Bank Holder',
        ];
        $bank_account = BankAccount::create($bank_default);
    }
}
