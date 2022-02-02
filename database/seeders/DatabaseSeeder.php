<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //\App\Models\User::factory(1000)->create();
        $this->call([
            CategorySeeder::class,
            UserTableSeeder::class
            //FoodSeeder::class
        ]);

        Food::factory(200)->create();

    }
}
