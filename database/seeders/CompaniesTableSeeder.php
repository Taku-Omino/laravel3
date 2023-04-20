<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追加

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run()
{
    DB::table('companies')->insert([
        [
            'user' => 'Steve Jobs',
            'company' => 'Apple'
        ],
        [
            'user' => 'Bill Gates',
            'company' => 'Microsoft'
        ],
        [
            'user' => 'Mark Zuckerberg',
            'company' => 'Facebook'
        ],
        [
            'user' => 'Jeff Bezos',
            'company' => 'Amazon'
        ],
        [
            'user' => 'Larry Page',
            'company' => 'Google'
        ],
        [
            'user' => 'Sergey Brin',
            'company' => 'Google'
        ],
        [
            'user' => 'Elon Musk',
            'company' => 'Tesla'
        ],
        [
            'user' => 'Jack Ma',
            'company' => 'Alibaba'
        ],
        [
            'user' => 'Masayoshi Son',
            'company' => 'Softbank'
        ],
        [
            'user' => 'Hiroshi Mikitani',
            'company' => 'Rakuten'
        ]
    ]);
}

}
