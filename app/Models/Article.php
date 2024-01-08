<?php

namespace App\Models;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray(){
        return [
            'id'=> $this->id,
            'title'=> $this->title,
            'body'=> $this->body,
            'category'=> $this->category,
        ];
    } 
    
    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'image',
        'user_id',
        'category_id',
        'is_accepted',
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function category(){

        return $this->belongsTo(Category::class);

    }

}
