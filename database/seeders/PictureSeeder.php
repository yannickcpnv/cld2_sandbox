<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Picture;
use App\Models\Gallery;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
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
            Picture::create([
                'title'      => $faker->sentence,
                'path'       => $faker->uuid,
                'gallery_id' => Gallery::all()->random()->id,
            ]);
        }
    }
}
