<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Article;


class Category extends Model
{
    protected $fillable=[
        "name",
    ];

    public function Article(Article $article){
        $this->belongsTo($article);
    }
}
