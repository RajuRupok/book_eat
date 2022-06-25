<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
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
     * Relation with Restaurant one to many relationship
     *
     * One user may provide multiple Restaurant
     */
    public function restaurants(){
        return $this->hasMany('App\Models\Restaurant', 'cat_id', 'id');
    }
}
