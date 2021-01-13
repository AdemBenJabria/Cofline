<?php

namespace Cofline\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Allowing Mass Assignment
    protected $guarded = [];

    // Set mass-assignable fields
    protected $fillable = ['title', 'content', 'category'];
    
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
