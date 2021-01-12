<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Allowing Mass Assignment
    protected $guarded = [];

    /**
     * relation with many posts, one category can has many posts
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
