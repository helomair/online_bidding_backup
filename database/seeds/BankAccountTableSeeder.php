<?php
use Illuminate\Database\Seeder;
use App\BankAccount;

class BankAccountTableSeeder extends Seeder {

    public function run()
    {
        $bank_default = [
			'account' => '261508408',
            'bank_name' => 'ACB chi nhánh bình dương',
            'holder_name' => 'Nguyễn Minh Cảnh',
        ];
        $bank_account = BankAccount::create($bank_default);
    }
}
