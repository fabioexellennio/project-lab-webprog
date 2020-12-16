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
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Samsung TV',
            'description' => 'Samsung Tv has best curve display in the world',
            'price' => 3000000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => 2
        ]);
        Product::create([
            'name' => 'Iphone 12',
            'description' => 'Its a leap year',
            'price' => 15000000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Xiaomi 10T',
            'description' => 'Xiaomi flagship with best performance',
            'price' => 9000000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => 1
        ]);
        Product::create([
            'name' => 'Macbook 2021',
            'description' => 'New chip m1 much better than the blue past',
            'price' => 20000000,
            'image' => 'xiaomiTV.jpg',
            'category_id' => 3
        ]);
    }
}
