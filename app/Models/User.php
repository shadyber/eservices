<?php

namespace App\Models;

use App\Permissions\HasPermissionsTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

class  User extends Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable;
    use HasPermissionsTrait; //Import The Trait
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'tel',
        'isSubscribed'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }


    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function videos()
    {
        return $this->hasMany(Videos::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }
}
