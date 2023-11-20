<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Post::factory(20)->create();

        // User::create([
        //     'name' => 'lukman',
        //     'email' => 'lukman@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'taufik',
        //     'email' => 'taufik@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Engineer',
            'slug' => 'engineer'
        ]);
    }
}
