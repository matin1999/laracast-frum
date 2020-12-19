<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker\Factory::create();
        for ($i = 0; $i < 40; $i++) {
            User::create([
                'name' => $this->faker->name(),
                'email' => $this->faker->email(50),
                'password' => $this->faker->password(),
                ]);

        }
    }
}
