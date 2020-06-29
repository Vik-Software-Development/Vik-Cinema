<?php

use App\Funcionario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create(
            [
                'Nome' => 'Erik Jhonatta',
                'CPF' => '12345678910',
                'Telefone' => '(87) 99999-9999',
                'Email' => 'erikjhonatta@gmail.com',
                'Senha' => Hash::make('12345678'),
                'Admin' => true,
            ],
        );
    }
}
