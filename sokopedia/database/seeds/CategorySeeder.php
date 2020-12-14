<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['HP','TV','Laptop'];

        for($i = 0; $i < count($categories); $i++){
            Category::create([
                'name' => $categories[$i]
            ]);
        }
    }
}
