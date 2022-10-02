<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Comment extends Model
{
    use HasFactory, HasRelationships;

    public $timestamps = false;

    public function replies()
    {
        return $this->hasManyDeep(self::class, 'parent_id');
    }

    public function user()
    {
        return $this->hasOneDeep(
            User::class,
            [Post::class],
            ['id', 'id'],
            ['post_id', 'user_id']
        );
    }
}
