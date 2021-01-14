<?php

namespace Cofline\Blog\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * The table associated with the model
     */
    //protected $table = 'posts';


    /**
     * Allowing Mass Assignment
     */ 
    protected $guarded = [];

    /**
     * Set mass-assignable fields
     */ 
    //protected $fillable = ['title', 'content', 'category'];
    
    /**
     * Relation with Category, one post belongs to a category
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relation with User, one post belongs to an author
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }



}
