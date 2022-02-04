<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 13; $i++) {
            Gallery::create(['name' => $faker->word,]);
        }
    }
}
