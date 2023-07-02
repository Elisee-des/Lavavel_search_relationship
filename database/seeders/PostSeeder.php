<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
        $users = User::all();

        for ($i=0; $i < 20; $i++) { 
            Post::create([
                'title' => "Post $i",
                'description' => "This is body of Post $i",
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id
            ]);
        }
    }
}
