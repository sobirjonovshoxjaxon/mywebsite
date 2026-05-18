<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [

            ['category' => 'Interior Design'],
            ['category' => 'Exterior Design'],
            ['category' => 'Industrial Design'],
            ['category' => 'Landscape Design'],

        ];


        foreach($categories as $category){

            Category::create($category);
        }
    }
}
