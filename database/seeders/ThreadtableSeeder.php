<?php

namespace Database\Seeders;

use App\Models\Thread;
use Illuminate\Database\Seeder;
use Faker;
class ThreadtableSeeder extends Seeder
{
    private $faker;

    public function run()
    {
        $this->faker = Faker\Factory::create();
        for ($i = 1; $i < 21; $i++) {
            Thread::create([
                'title' => $this->faker->sentence(10),
                'body' => $this->faker->sentence(50),
                'user_id' => rand(1,30),
                'channel_id' => $i,
            ]);

        }
    }
}
