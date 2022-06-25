<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Restaurant extends Model
{
    use SoftDeletes;

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
        //
    ];

    /**
     * Relation with rating one to many relationship
     *
     * One user may provide multiple Rating
     */
    public function ratings(){
        return $this->hasMany('App\Models\Rating', 'res_id', 'id');
    }

    /**
     * Relation with Offer one to many relationship
     *
     * One user may provide multiple Offer
     */
    public function offers(){
        return $this->hasMany('App\Models\Offer', 'res_id', 'id');
    }

    /**
     * Relation with Order one to many relationship
     *
     * One user may provide multiple Order
     */
    public function orders(){
        return $this->hasMany('App\Models\Order', 'res_id', 'id');
    }

    /**
     * Relation with Review one to many relationship
     *
     * One user may provide multiple Review
     */
    public function reviews(){
        return $this->hasMany('App\Models\Review', 'res_id', 'id');
    }

    /**
     * Relation with Wishlist one to many relationship
     *
     * One user may provide multiple Wishlist
     */
    public function wishlists(){
        return $this->hasMany('App\Models\Wishlist', 'res_id', 'id');
    }

    /**
     * Relation with Priotiry one to many relationship
     *
     * One user may provide multiple Priotiry
     */
    public function priotiry(){
        return $this->hasOne('App\Models\Priotiry', 'res_id', 'id');
    }

    /**
     * Relation with Users one to many relationship
     *
     * One User may have multiple Users
     */
    public function user(){
        return $this->belongsTo('App\User', 'creator_id', 'id');
    }

    /**
     * Relation with Categorys one to many relationship
     *
     * One Category may have multiple Categorys
     */
    public function category(){
        return $this->belongsTo('App\Models\Category', 'cat_id', 'id');
    }
}
