<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'     => 1,
                'acct_name'   => 'Elle P. Regular Account',
                'init_invest' => 41500,
                'start_date'  => '2020-11-04',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 2,
                'acct_name'   => 'Howard G. Regular Account',
                'init_invest' => 24000,
                'start_date'  => '2020-09-22',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 3,
                'acct_name'   => 'Lillard D. Regular Account',
                'init_invest' => 65000,
                'start_date'  => '2020-08-15',
                'remarks'     => 'Done with the transaction'
            ]
        ];

        foreach($data as $a) {
            \App\Account::create($a);
        }
    }
}
