<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@ynov.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'youness belmadani',
               'email'=>'younes.belmadani@ynov.com',
               'type'=> 0,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'elmahdi kachour',
               'email'=>'elmahdi.kachour@ynov.com',
               'type'=> 0,
               'password'=> bcrypt('12345678'),
            ],

        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}