<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name'          => 'Ibanez GRG121DX Black Flat',
                'brand_id'      => 3,
                'description'   => 'De Ibanez GRG serie bewijst dat een gitaar niet veel hoeft te kosten en toch goed kan klinken! De GRG121 is ontwikkeld voor gitaristen die op zoek zijn naar de kwaliteit van Ibanez maar niet te diep in de buidel willen tasten. De GRG121 speelt en klinkt niet alleen beter dan alle andere gitaren in zijn prijsklasse. De bouwkwaliteit, kwaliteitscontrole en garantie zijn ook nog eens precies hetzelfde als de dure Ibanez modellen. De mahonie body heeft een eenvoudige zwarte finish en is gecombineerd met een maple hals en een rosewood toets. De toets is ingelegd met unieke sharktooth inlays. De IBZ6 humbucker pickups zorgen voor een krachtige felle klank waarmee je alle kanten op kunt. Met de GRG121DX speel je binnen de kortste keren de sterren van de hemel!',
                'price'         => 199,
                'created_by'    => 1,
            ],

            [
                'name'          => 'Fender Player Stratocaster MN Black',
                'brand_id'      => 2,
                'description'   => 'Het inspirerende geluid van een Stratocaster is één van de fundamenten van Fender. Met de typische klank: bel-achtige high-end, punchy mids en robuuste low-end, gecombineerd met kristalheldere articulatie. De Player Stratocaster zit vol met authentiek Fendergevoel en -stijl. Deze vernieuwde gitaar is klaar om je muzikale visie te ondersteunen, is veelzijdig genoeg om elke muziekstijl aan te kunnen en is het perfecte platform om je eigen geluid te creëren.',
                'price'         => 709,
                'created_by'    => 1,
            ],

            [
                'name'          => 'Squier Affinity Series Stratocaster',
                'brand_id'      => 5,
                'description'   => 'Een uitstekende toegangspoort tot de aloude Fender-familie, de Squier Affinity Series Stratocaster levert een legendarisch ontwerp en typische klank voor de aspirant-gitaarheld van vandaag. Deze Strat® heeft verschillende spelervriendelijke verfijningen, zoals een dunne en lichtgewicht body, een slank en comfortabel "C" -vormig nekprofiel, een 2-punts tremolobrug voor superieure tremolo-actie en verzegelde gegoten stemmachines met gespleten assen voor soepele, nauwkeurige afstemming en gemakkelijk opnieuw inbrengen. Geladen met een trio van Squier single-coil Strat pickups met 5-weg schakeling voor genre-tartende sonische variatie, is dit model klaar om elke speler op elk stadium te begeleiden.',
                'price'         => 249,
                'created_by'    => 1,
            ],

            [
                'name'          => 'Fender Player Stratocaster MN Buttercream',
                'brand_id'      => 2,
                'description'   => 'Het inspirerende geluid van een Stratocaster is één van de fundamenten van Fender. Met de typische klank: bel-achtige high-end, punchy mids en robuuste low-end, gecombineerd met kristalheldere articulatie. De Player Stratocaster zit vol met authentiek Fendergevoel en -stijl. Deze vernieuwde gitaar is klaar om je muzikale visie te ondersteunen, is veelzijdig genoeg om elke muziekstijl aan te kunnen en is het perfecte platform om je eigen geluid te creëren.',
                'price'         => 709,
                'created_by'    => 1,
            ],

            [
                'name'          => 'Squier Classic Vibe \'60s Stratocaster IL 3-Color Sunburst',
                'brand_id'      => 5,
                'description'   => 'A tribute to the 1960s evolution of the Strat, the Classic Vibe \'60s Stratocaster IL 3-Color Sunburst creates incredible tone courtesy of a trio of Fender-Designed alnico single-coil pickups. Player-friendly features include a slim, comfortable "C"-shaped neck profile with an easy-playing 9.5"-radius fingerboard and narrow-tall frets, as well as a vintage-style tremolo system for expressive string bending effects. This throwback Squier model also features 1960s-inspired headstock markings, rich-looking nickel-plated hardware and a slick vintage-tint gloss neck finish for an old-school vibe.',
                'price'         => 439,
                'created_by'    => 1,
            ],
        ];

        foreach($products as $product) {
            \App\Models\Product::create($product);
        }

        for ($i = 1; $i < 6; $i++) {
            \App\Models\ProductMedia::create([
                'product_id'    => $i,
                'file_name'     => 'p' . $i . '.jpeg',
                'created_by'    => 1,
            ]);
        }
    }
}
