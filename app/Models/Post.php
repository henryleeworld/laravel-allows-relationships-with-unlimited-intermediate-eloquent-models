<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Post extends Model
{
    use HasFactory, HasRelationships;

    public $timestamps = false;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function commentReplies()
    {
        return $this->hasManyDeep(
            Comment::class,
            [Comment::class.' as alias'],
            [null, 'parent_id']
        );
    }

    public function commentRepliesFromRelations()
    {
        return $this->hasManyDeepFromRelations(
            $this->comments(),
            (new Comment)->setAlias('alias')->replies()
        );
    }
}
