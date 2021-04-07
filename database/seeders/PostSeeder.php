<?php

namespace Database\Seeders;

use App\Models\Post;
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
        Post::insert([
            ['id' => 21, 'user_id' => 11],
            ['id' => 22, 'user_id' => 12],
            ['id' => 23, 'user_id' => 13],
            ['id' => 24, 'user_id' => 14]
        ]);
    }
}
