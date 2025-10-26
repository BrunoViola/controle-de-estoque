<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ProdutoTableSeeder::class);
        
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO produtos
        (nome, quantidade, valor, descricao)
        VALUES (?, ?, ?, ?)",
        array('Geladeira', 2, 5900,
        'Side by Side com gelo na porta'));
        
        DB::insert("INSERT INTO produtos
        (nome, quantidade, valor, descricao)
        VALUES (?,?,?,?)",
        array('Fogão', 5, 950.00,
        'Painel automático e forno elétrico'));

        DB::insert("INSERT INTO produtos
        (nome, quantidade, valor, descricao)
        VALUES (?,?,?,?)",
        array('Microondas', 1, 1520.00,
        'Manda SMS quando termina de esquentar'));
    }
}