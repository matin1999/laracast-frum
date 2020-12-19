<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Models\Thread;
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

        (new ThreadtableSeeder)->run();
        (new ReplytableSeeder)->run();
        (new UserTableSeeder)->run();
        (new ChanneltableSeeder)->run();
    }
}
