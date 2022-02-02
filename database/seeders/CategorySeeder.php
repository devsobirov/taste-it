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
                'name' => 'Milliy Taomlar',
                'description' => 'Ozbek milliy taomlari'
            ],
            [
                'name' => 'Uygur Taomlari',
                'description' => null
            ],
            [
                'name' => 'Nonushta',
                'description' => 'nonushta uchun taomlar'
            ],
            [
                'name' => 'Fast Food',
                'description' => 'Burger, Pizza, Hot-Dog'
            ],
            [
                'name' => 'Shirinliklar',
                'description' => null
            ]
        ];


        DB::table('categories')->insert($categories);
    }
}
