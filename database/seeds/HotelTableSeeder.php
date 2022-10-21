<?php

use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'nome' => 'HOTEL BELA VISTA',
        ]);

        DB::table('hotels')->insert([
            'nome' => 'HOTEL VILA BUSINESS',
        ]);
    }
}
