<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use HasFactory, Notifiable;

    use Sluggable;
    protected $fillable = [
        'title',
        'detail',
        'photo',
        'thumb',
        'lang',
        'slug',
        'tags',
        'user_id',
        'blog_category_id',
    ];


    public function sluggable(): array
    {
        // TODO: Implement sluggable() method.
        return [
            'slug'=>['source'=>'title']
        ];
    }
    public function getlink(){
        return url('/blog/'.$this->slug);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }

    public function blogComments()
    {
        return $this->hasMany(BlogComment::class);
    }



    public static function lastN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('id','desc')->take($n)->get();
    }

    public static function trandinN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }


    public static function popularN($n){
        return Blog::where('lang',config('app.locale'))->orderBy('visit', 'desc')->take($n)->get();
    }

    public static function featuredN($n){
        return Blog::query()
            ->where('tags', 'LIKE', "%featured %")
            ->where('lang',config('app.locale'))
            ->orderBy('id','desc')

            ->get();

    }



}
