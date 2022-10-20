<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Administrador',
            'email' => 'admin@admin.com.br',
            'password' => Hash::make('123@etpc'),
            'avatar' => 'user.png',
            'dtnascimento' => '1984-02-28',
            'cpf' => '10303069740',
            'documento' => '11662484',
            'telefone' => '2433437099',
            'genero' => 'M',
            'cep' => '2725123',
            'logradouro' => 'Rua H',
            'numero' => '306',
            'complemento' => 'ND',
            'bairro' => 'Jardim Amalia I',
            'cidade' => 'Volta Redonda',
            'uf' => 'RJ'
        ]);
    }
}
