<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'PHP REST API',
            'author' => 'David Kelly',
            'content' => 'Simple REST API built with PHP 8',
        ]);
    }
}
