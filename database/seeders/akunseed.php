<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class akunseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            // [
            //     'username' => 'admin',
            //    'name'=>'ini akun Admin',
            //    'email'=>'admin@example.com',
            //     'level'=>'admin',
            //    'password'=> bcrypt('123456'),
            // ],
            [
               
               'name'=>'ini akun User (non admin)',
               'email'=>'parallelvto@gmail.com',
               'password'=> bcrypt('123456'),
               'level'=>'driver',
            ]
        ];

        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
    }
}
