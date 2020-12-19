<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Faker;
class ChanneltableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            Channel::create([
                'name' => $this->faker->word(),
                'slug' => $this->faker->word(),
            ]);
        }
    }
}
