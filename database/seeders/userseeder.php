<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpa a tabela antes de inserir novos registros (opcional)
        DB::table('users')->truncate();

        // Inserindo registros no banco
        $users = [
            [
                'name' => 'Cleiton Quiorato',
                'username' => 'msflix',
                'email' => 'cursosquioratocleiton51@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('999cldvC'),
            ],
            [
                'name' => 'Vendedor vendor',
                'username' => 'vendor',
                'email' => 'vendedorquioratocleiton51@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('999cldvC'),
            ],
            [
                'name' => 'Cliente user',
                'username' => 'userr',
                'email' => 'clientequioratocleiton51@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('999cldvC'),
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']], // Verifica duplicação com base no e-mail
                $user
            );
        }
    }
}
