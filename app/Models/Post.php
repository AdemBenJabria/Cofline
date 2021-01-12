<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allowing Mass Assignment
    protected $guarded = [];

    /**
     * Relation with Category, one post belongs to a category
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function users()
    {
        return $this->belongsTo('App\User');
    }



}
