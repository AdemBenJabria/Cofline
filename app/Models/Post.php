<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    /**
     * Relation with Category, one post belongs to a category
     */
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
    


}
