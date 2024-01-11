<?php

namespace App\Models;

use App\Models\Tag;
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
            'user'=> $this->user,
            'subtitle'=> $this->subtitle,
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
        'slug',
    ];

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function category(){

        return $this->belongsTo(Category::class);

    }

    public function tags(){

        return $this->belongsToMany(Tag::class);

    }

    public function getRoutKeyName(){
        return 'slug';
    }

    public function readDuration(){
       $totalWords = str_word_count($this->body);
       $minuteToRead = round($totalWords / 200);

       return intval($minuteToRead);
    }

}
