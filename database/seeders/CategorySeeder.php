<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Larave','Symfony', 'React', 'React Native', 'Flutter', "Machine Learning"];

        foreach($categories as $category)
        {
            Category::created([
                'name' => $category
            ]);
        }
    }
}
