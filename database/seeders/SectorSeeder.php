<?php

namespace Database\Seeders;

use App\Models\Sector;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            [
                'title' => 'الأول',
                'description' => ''
            ],
            [
                'title' => 'الثاني',
                'description' => ''
            ],
            [
                'title' => 'الثالث',
                'description' => ''
            ],
            [
                'title' => 'الرابع',
                'description' => ''
            ],
            [
                'title' => 'الخامس',
                'description' => ''
            ],
            [
                'title' => 'السادس',
                'description' => ''
            ],
            [
                'title' => 'السابع',
                'description' => ''
            ],
            [
                'title' => 'الثامن',
                'description' => ''
            ],
            [
                'title' => '---',
                'description' => ''
            ],
            [
                'title' => '---',
                'description' => ''
            ],
            [
                'title' => '---',
                'description' => ''
            ],
        ];
        foreach ($sectors as $sector) {
            Sector::create($sector);
        }
    }
}
