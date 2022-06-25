<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id', 'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Relation with roles one to many relationship
     *
     * One Role may have multiple Users
     */
    public function role(){
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }


    /**
     * Relation with rating one to many relationship
     *
     * One user may provide multiple Rating
     */
    public function ratings(){
        return $this->hasMany('App\Models\Rating', 'user_id', 'id');
    }


    /**
     * Relation with restaurant one to many relationship
     *
     * One user may provide multiple restaurant
     */
    public function restaurants(){
        return $this->hasMany('App\Models\Restaurant', 'creator_id', 'id');
    }


    /**
     * Relation with order one to many relationship
     *
     * One user may provide multiple order
     */
    public function orders(){
        return $this->hasMany('App\Models\Order', 'user_id', 'id');
    }


    /**
     * Relation with Review one to many relationship
     *
     * One user may provide multiple Review
     */
    public function reviews(){
        return $this->hasMany('App\Models\Review', 'user_id', 'id');
    }


    /**
     * Relation with Wishlist one to many relationship
     *
     * One user may provide multiple Wishlist
     */
    public function wishlists(){
        return $this->hasMany('App\Models\Wishlist', 'user_id', 'id');
    }
}
