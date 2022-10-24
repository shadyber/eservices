<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    use Sluggable;
    protected $fillable = [
        'title',
        'slug',
        'detail',
        'icon',

    ];



    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }

    public function getlink(){
        return url('/category/'.$this->slug);
    }


    public static function allCategories(){
        return BlogCategory::all();
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

}
