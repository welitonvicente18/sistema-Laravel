<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'parentesco' => 'Pai',
            'name' => 'Test User',
            'email' => '_test@example.com',
            // 'email_verified_at' => Str::random(9) . '_test@example.com',
            'dt_nascimento' => '1992-03-18',
            'cpf' => '03092522109',
            'rg' => '5561505',
            'perfil' => '2',
            'sexo' => 'M',
            'telefone' => '6192522109',
            'uf' => 'GO',
            'rua' => 'Rua 04',
            'cep' => '72872798',
            'cidade' => 'Valparaiso',
            'complemento' => 'teset ecomplemento',
            'bairro' => 'parque das cachoeiras',
            'password' =>  Hash::make('12345678'),
        ]);
        \App\Models\User::factory(10)->create([
            'parentesco' => 'Pai',
            'name' => Str::random(10) . 'Test User',
            'email' => Str::random(9) . '_test@example.com',
            // 'email_verified_at' => Str::random(9) . '_test@example.com',
            'dt_nascimento' => '1992-03-18',
            'cpf' => '03092522109',
            'rg' => '5561505',
            'uf' => 'GO',
            'perfil' => '2',
            'sexo' => 'M',
            'telefone' => '6192522109',
            'rua' => 'Rua 04',
            'cep' => '72872798',
            'cidade' => 'Valparaiso',
            'complemento' => 'teset ecomplemento',
            'bairro' => 'parque das cachoeiras',
            'password' =>  Hash::make('12345678'),
        ]);
    }
}
