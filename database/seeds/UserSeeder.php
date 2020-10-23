<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'lname'    => 'Elle',
                'fname'    => 'Pedoch',
                'address'  => 'Potuhan, Tubigon, Bohol',
                'phone'    => '0912.4974.167',
                'email'    => 'ellepedoch@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname'    => 'Howard',
                'fname'    => 'Glenn',
                'address'  => 'Cabulijan, Tubigon, Bohol',
                'phone'    => '0932.3415.926',
                'email'    => 'glennhoward12@gmail.com',
                'password' => bcrypt('passwrd123')
            ],
            [
                'lname'    => 'Lillard',
                'fname'    => 'Dwane',
                'address'  => 'Centro,Tubigon, Bohol',
                'phone'    => '0921.5621.145',
                'email'    => 'Lillardwane@gmail.com',
                'password' => bcrypt('pasword123')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}


