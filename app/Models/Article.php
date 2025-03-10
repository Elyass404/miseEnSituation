<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Article extends Model
{
    protected $fillable=[
        "title",
        "description",
        "category_id",
    ];

    public function Category(Category $category){
        $this->belongsTo($category);
    }
}
