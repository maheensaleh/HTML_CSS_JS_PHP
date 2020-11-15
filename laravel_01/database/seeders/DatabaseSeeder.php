<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticlesSeeder::class);
    }
}
