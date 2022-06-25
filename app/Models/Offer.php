<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
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
     * Relation with Order one to many relationship
     *
     * One user may provide multiple Order
     */
    public function orders(){
        return $this->hasMany('App\Models\Order', 'offer_id', 'id');
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
