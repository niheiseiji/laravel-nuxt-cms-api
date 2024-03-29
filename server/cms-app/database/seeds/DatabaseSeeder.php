<?php

use Illuminate\Database\Seeder;
use database\seeds\PostsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(PostsTableSeeder::class);
    }
}
