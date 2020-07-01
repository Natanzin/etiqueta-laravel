<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            ['name' => 'Shampoo Dove oxigênio 400ml','price' => '9.90'],
            ['name' => 'Brilho labial sabores','price' => '3.99'],
            ['name' => 'Talco cremoso granado pink','price' => '12.99'],
            ['name' => 'Desodorante Rollon Giovanna baby','price' => '7.99']
        ]);
    }
}
