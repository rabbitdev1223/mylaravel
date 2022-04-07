<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'admin@gmail.com',
            'role_id' => '1',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
        ]);

        \DB::table('users')->insert([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'role_id' => '2',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
        ]);
        \DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@gmail.com',
            'role_id' => '3',
            'email_verified_at' => now(),
            'password' => Hash::make('11111111'),
        ]);
    
    }
}
