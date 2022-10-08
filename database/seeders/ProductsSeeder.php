<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'SEVENTEEN Lightstick Ver 2',
            'description' => 'SEVENTEEN Carat Bong Ver 2 Lightstick',
            'currency' => 'PHP',
            'price' => 1549.00,
            'brand' => 'Seventeen',
            'category' => 'lightstick',
            'image' => 'https://my-test-11.slatic.net/p/4fa67e774e23122eaf6b3d986e2b31d6.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'TXT The Dream Chapter Eternity Album',
            'description' => 'There are six tracks in the album including the opening track Drama and title track Cant You See Me?',
            'currency' => 'PHP',
            'price' => 830.00,
            'brand' => 'Tomorrow By Together',
            'category' => 'album',
            'image' => 'https://kpopmart.com/20286-large_default/txt-the-dream-chapter-eternity-random.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'BLACKPINK How you like that Photocards',
            'description' => 'BLACKPINK How you like that Album Photocards',
            'currency' => 'PHP',
            'price' => 1500.00,
            'brand' => 'Blackpink',
            'category' => 'photocards',
            'image' => 'https://thekfandomstore.com/wp-content/uploads/2021/09/photo-collage-23.png'
        ]);
    }
}
