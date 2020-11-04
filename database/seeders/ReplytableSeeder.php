<?php

namespace Database\Seeders;

use App\Models\Reply;
use Illuminate\Database\Seeder;
use Faker;

class ReplytableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            Reply::create([
                'body' => $this->faker->sentence(50),
                'user_id' => rand(1,30),
                'thread_id' => rand(1,30),
            ]);

        }
    }
}
