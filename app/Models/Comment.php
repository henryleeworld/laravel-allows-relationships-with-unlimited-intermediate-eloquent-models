<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasEagerLimit;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Staudenmeir\EloquentHasManyDeep\HasTableAlias;

class Comment extends Model
{
    use HasEagerLimit, HasFactory, HasRelationships, HasTableAlias;

    public $timestamps = false;

    public function replies()
    {
        return $this->hasMany(self::class, 'parent_id');
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
