<?php

use Illuminate\Database\Seeder;

class InstituicaosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instituicaos')->insert([
            'nome' => 'HOTEL BELA VISTA',
        ]);

        DB::table('instituicaos')->insert([
            'nome' => 'HOTEL VILA BUSINESS',
        ]);
    }
}
