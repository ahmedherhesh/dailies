<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tables = [
            ['title' => 'القطاعات'],
            ['title' => 'الخدمات'],
        ];
        foreach($tables as $table){
            Table::create($table);
        }
    }
}
