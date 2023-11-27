<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Saya;
use App\Models\User;
use App\Models\Category;
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
        Saya::create([
            'nama' => 'lukman',
            'nim' => 'E1E121004',
            'jurusan' => 'Informatika'
        ]);
    }
}
