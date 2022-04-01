<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mindwhiz',
            'age' => '00',
            'gender' => 'male',
            'height' => '00',
            'weight' => '00',
            'username' => 'mindwhiz',
            'usertype' => 'admin',
            'phone'=>'0300000000000',
            'email' => 'mindwhiz20@gmail.com',
            'password' => Hash::make('MindWhiz@20')
        ]);
        DB::table('users')->insert([
            'name' => 'IronBox',
            'age' => '00',
            'gender' => 'male',
            'height' => '00',
            'weight' => '00',
            'username' => 'ironbox',
            'usertype' => 'admin',
            'phone'=>'0200000000000',
            'email' => 'info@ironbox963.com',
            'password' => Hash::make('ironbox@963')
        ]);
    }
}
