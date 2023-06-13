<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin Ramu',
            'email' => 'adminramu@duck.com',
            'password' => Hash::make('1234'),
            'roles' =>  'ADMIN' 
        ]);
    }
    // php artisan db:seed --class=AdminSeeder
}
