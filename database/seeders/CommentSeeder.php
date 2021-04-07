<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            ['id' => 31, 'post_id' => 21, 'parent_id' => null],
            ['id' => 32, 'post_id' => 22, 'parent_id' => null],
            ['id' => 33, 'post_id' => 23, 'parent_id' => null],
            ['id' => 34, 'post_id' => 24, 'parent_id' => null],
            ['id' => 35, 'post_id' => 24, 'parent_id' => 34]
        ]);
    }
}
