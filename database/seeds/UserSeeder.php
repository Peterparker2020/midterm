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
                'lname'    => 'Palapar',
                'fname'    => 'albert',
                'address'  => 'Cabulijan, Tubigon, Bohol',
                'phone'    => '0919.4974.167',
                'email'    => 'johnalbert@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname'    => 'dhain',
                'fname'    => 'Taguines',
                'address'  => 'Buenos Aries, Tubigon, Bohol',
                'phone'    => '0912.3415.333',
                'email'    => 'dhainkarl@gmail.com',
                'password' => bcrypt('passwrd123')
            ],
            [
                'lname'    => 'jay',
                'fname'    => 'Podador',
                'address'  => 'Cawayanan,Tubigon, Bohol',
                'phone'    => '0928.4521.145',
                'email'    => 'jaypodador@gmail.com',
                'password' => bcrypt('pasword123')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}


