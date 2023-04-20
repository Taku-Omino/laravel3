<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    /*public function run(): void
    {
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }*/
    public function run()
    {
    \App\Models\User::factory()->count(10)->create();
    \App\Models\Book::factory()->count(20)->create();
    \App\Models\Company::factory()->count(3)->create();
    }
}