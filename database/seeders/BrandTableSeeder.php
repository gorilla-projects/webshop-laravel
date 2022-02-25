<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Morgan Guitars',
            'Fender',
            'Ibanez',
            'Gretsch',
            'Squier',
            'Jackson',
            'Epiphone',
            'Paul Reed',
            'Gibson',
            'Yamaha',
            'ESP',
            'Gibson Custom Shop',
            'Godin',
            'Guild',
            'G&L',
            'Schecter',
        ];

        foreach ($brands as $brand) {
            \App\Models\Brand::create([
                'name'          => $brand,
                'created_by'    => 1,
            ]);
        }
    }
}
