<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Country extends Model
{
    use HasFactory, HasRelationships;

    public $timestamps = false;

    public function comment()
    {
        return $this->hasOneDeep(Comment::class, [User::class, Post::class])->withDefault();
    }

    public function commentFromRelations()
    {
        return $this->hasOneDeepFromRelations($this->posts(), (new Post)->comments());
    }

    public function comments()
    {
        return $this->hasManyDeep(Comment::class, [User::class, Post::class]);
    }

    public function commentsFromRelations()
    {
        return $this->hasManyDeepFromRelations([$this->posts(), (new Post)->comments()]);
    }

    public function posts()
    {
        return $this->hasManyThrough(Post::class, User::class);
    }

    public function roles()
    {
        return $this->hasManyDeep(Role::class, [User::class, 'role_user']);
    }
}
