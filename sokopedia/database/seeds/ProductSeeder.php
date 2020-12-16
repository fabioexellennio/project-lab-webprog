<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Product::create([
            'name' => 'Xiaomi TV',
            'description' => 'Xiaomi Tv is coolest tv in the world',
            'price' => 1200000,
            'image' => 'xiaomi_TV.jpg',
            'category_id' => rand(1, 3)
        ]);
        Product::create([
            'name' => 'Xiaomi TV',
            'description' => 'Xiaomi Tv is coolest tv in the world',
            'price' => 1200000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => rand(1, 3)
        ]);
        Product::create([
            'name' => 'Xiaomi TV',
            'description' => 'Xiaomi Tv is coolest tv in the world',
            'price' => 1200000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => rand(1, 3)
        ]);
        Product::create([
            'name' => 'Xiaomi TV',
            'description' => 'Xiaomi Tv is coolest tv in the world',
            'price' => 1200000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => rand(1, 3)
        ]);
        Product::create([
            'name' => 'Xiaomi TV',
            'description' => 'Xiaomi Tv is coolest tv in the world',
            'price' => 1200000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => rand(1, 3)
        ]);
    }
}
