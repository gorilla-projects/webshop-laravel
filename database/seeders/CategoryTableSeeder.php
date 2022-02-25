<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Elektrische Gitaren',
            'Akoestische Gitaren',
            'Klassieke Gitaren',
            'Basgitaren',
            'Traditionele Snaarinstrumenten',
            'Gitaarversterkers',
            'Basversterkers',
            'Gitaar- en Baseffecten',
            'Onderdelen voor Gitaren, Basgitaren en Versterkers',
            'Accessoires voor Gitaar en Bas',
            'Kiekeboo',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name'  => $category,
            ]);
        }
    }
}
