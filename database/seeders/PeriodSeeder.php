<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $periods = [
            [
                'title' => 'الفترة الصباحية',
                'period' => 'من 8:30 ص حتى 3م',
            ],
            [
                'title' => 'الفترة الصباحية',
                'period' => 'من 3:00 م حتى 7م',
            ],
            [
                'title' => 'الفترة المسائية',
                'period' => 'من 7:00 م حتى هدوء الحاله',
            ],
        ];
        foreach ($periods as $period) {
            Period::create($period);
        }
    }
}
