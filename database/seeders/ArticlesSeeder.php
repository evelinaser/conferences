<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Provider\Lorem;
use App\Models\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Article())-›insert([
            [
            'title' => Lorem::sentence (nbWords: 5),
            'content' => Lorem:: text()
            ],
            [
            'title' => Lorem::sentence (nbWords: 5),
            'content' => Lorem:: text()
            ]
            ]);
    }
}
