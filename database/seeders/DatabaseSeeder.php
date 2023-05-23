<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $user = [
            [
            'username'=>'Hafidz',
            'email'=>'hafidz@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
            [
            'username'=>'Hanif',
            'email'=>'hanif@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
            [
            'username'=>'Akmal',
            'email'=>'akmal@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
            [
            'username'=>'Ghani',
            'email'=>'ghani@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
            [
            'username'=>'Najla',
            'email'=>'najla@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
            [
            'username'=>'Izza',
            'email'=>'izza@gmail.com',
            'type'=>'admin',
            'password'=> bcrypt('123456'),
            ],
        ];
        foreach ($user as $key => $user) {
            User::create($user);
        }
    }
}
