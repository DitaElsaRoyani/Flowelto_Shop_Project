<?php

use Illuminate\Database\Seeder;

class HomeCategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_category')->insert([
            [
                'flower_name'=>'Bouquet',
                'flower_image'=>'2.webp'

            ],

            [
                'flower_name'=>'Acrylic Flower',
                'flower_image'=>'4.webp'
            ],

            [
                'flower_name'=>'Fleur Box',
                'flower_image'=>'5.webp'
            ],
            [
                'flower_name'=>'Vase Arrangements',
                'flower_image'=>'6.webp'

            ]

        ]);
        
    }
}
