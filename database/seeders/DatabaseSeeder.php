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
            'name' => 'Test User',
            'email' => '_test@example.com',
            // 'email_verified_at' => Str::random(9) . '_test@example.com',
            'dt_nascimento' => '1992-03-18',
            'cpf' => '03092522109',
            'perfil' => '2',
            'sexo' => 'M',
            'telefone' => '6192522109',
            'password' =>  Hash::make('12345678'),
        ]);
        \App\Models\User::factory(10)->create([
            'name' => Str::random(10) . 'Test User',
            'email' => Str::random(9) . '_test@example.com',
            // 'email_verified_at' => Str::random(9) . '_test@example.com',
            'dt_nascimento' => '1992-03-18',
            'cpf' => '03092522109',
            'perfil' => '2',
            'sexo' => 'M',
            'telefone' => '6192522109',
            'password' =>  Hash::make('12345678'),
        ]);
    }
}
