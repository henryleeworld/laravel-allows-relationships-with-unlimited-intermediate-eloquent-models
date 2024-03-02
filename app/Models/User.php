<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class User extends Model
{
    use HasFactory, HasRelationships;

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
