<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin'.'@gmail.com',
            'password' => Hash::make('rahasia123'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
    }
}
