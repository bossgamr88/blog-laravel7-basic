<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user = new \App\User();
        $user->name = 'John Dev';
        $user->email = 'bospos.work11@gmail.com';
        $user->password = Hash::make(123456);
         // Hash::make() เป็นคำสั่งสำหรับเข้ารหัสของ password
        $user->save();
    }
}
