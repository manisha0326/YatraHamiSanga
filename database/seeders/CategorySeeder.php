<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'category_name' => 'Bike',
            'slug' => 'bike',
            'description' => "It's design and innovation made it a global icon of stylish."

        ]);
        Category::create([
            'category_name' => 'Scooter',
            'slug' => 'scooter',
            'description' => "It's design and innovation made it a global icon of stylish."
        ]);
        Category::create([
            'category_name' => 'Car',
            'slug' => 'car',
            'description' => "It is the confortable and stylish car with manual and automatic gearboxes."
        ]);
        Category::create([
            'category_name' => 'Scorpio',
            'slug' => 'scorpio',
            'description' => "It's is a tough, stylish SUV with strong performance and modern features."
        ]);
        Category::create([
            'category_name' => 'Hiace',
            'slug' => 'hiace',
            'description' => "This vehicle is known for its performance, realiability and versatility."
        ]);
    }
}
