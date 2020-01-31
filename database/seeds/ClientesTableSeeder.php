<?php

use Illuminate\Database\Seeder;
use \App\Cliente;
use \App\controlEscolar;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cliente::class, 50)->create();
        factory(controlEscolar::class, 50)->create();
    }
}
