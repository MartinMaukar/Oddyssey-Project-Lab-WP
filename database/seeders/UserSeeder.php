<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Jason',
            'email' => 'jason@gmail.com',
            'password'=>bcrypt('121212'),
            'user_type'=>'1'
        ]);

        DB::table('users')->insert([
            'name' => 'Martin',
            'email' => 'martin@gmail.com',
            'password'=>bcrypt('121212'),
            'user_type'=>'1'
        ]);

        DB::table('users')->insert([
            'name' => 'TestUser',
            'email' => 'test@gmail.com',
            'password'=>bcrypt('121212'),
            'user_type'=>'0'
        ]);
    }
}
