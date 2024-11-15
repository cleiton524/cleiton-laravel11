<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userseeder extends Seeder;
use DB;
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Cleiton Quiorato',
                'username' => 'msflix',
                'email' => 'quioratocleiton51@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendorquioratocleiton51@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ],
            [
                'name' => 'cliente user',
                'username' => 'userr',
                'email' => 'clienterquioratocleiton51@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('999cldvC')
            ]
        ])
    }
}
