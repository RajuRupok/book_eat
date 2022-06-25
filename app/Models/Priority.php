<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Priority extends Model
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
     * Relation with Restaurants one to One relationship
     *
     * One Priority may have One Restaurants
     */
    public function restaurant(){
        return $this->hasOne('App\Models\Restaurant', 'res_id', 'id');
    }
}
