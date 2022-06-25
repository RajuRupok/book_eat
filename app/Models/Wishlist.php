<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
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
     * Relation with Users one to many relationship
     *
     * One User may have multiple Users
     */
    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /**
     * Relation with Restaurants one to many relationship
     *
     * One Restaurant may have multiple Restaurants
     */
    public function restaurant(){
        return $this->belongsTo('App\Models\Restaurant', 'res_id', 'id');
    }
}
