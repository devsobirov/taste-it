<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => json_encode([
                    'uz' => 'Milliy Taomlar',
                    'ru' => 'Национальное Блюда',
                    'en' => 'National Food',
                    'jojo' => 'Jojo Jojo'
                ]),
                'description' => 'Ozbek milliy taomlari'
            ],
            [
                'name' => json_encode([
                    'uz' => 'Milliy Taomlar',
                    'ru' => 'Национальное Блюда',
                    'en' => 'National Food',
                    'jojo' => 'Jojo Jojo'
                ]),
                'description' => null
            ],
            [
                'name' => json_encode([
                    'uz' => 'Milliy Taomlar',
                    'ru' => 'Национальное Блюда',
                    'en' => 'National Food',
                    'jojo' => 'Jojo Jojo'
                ]),
                'description' => 'nonushta uchun taomlar'
            ],
            [
                'name' => json_encode([
                    'uz' => 'Milliy Taomlar',
                    'ru' => 'Национальное Блюда',
                    'en' => 'National Food',
                    'jojo' => 'Jojo Jojo'
                ]),
                'description' => 'Burger, Pizza, Hot-Dog'
            ],
            [
                'name' => json_encode([
                    'uz' => 'Milliy Taomlar',
                    'ru' => 'Национальное Блюда',
                    'en' => 'National Food',
                    'jojo' => 'Jojo Jojo'
                ]),
                'description' => null
            ]
        ];


        DB::table('categories')->insert($categories);
    }
}
