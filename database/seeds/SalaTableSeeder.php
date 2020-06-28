<?php

use Illuminate\Database\Seeder;
use App\Sala;

class SalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sala::create([
        	'nome'=>'Sala1',
        	'quantPessoas'=>40,
        ]);
    }
}
