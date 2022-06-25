<?php

namespace App\Http\Controllers\Admin\Restaurants;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\Restaurant;

class RestaurantsController extends Controller
{
    /**
     * for showing active manager
     * @return Restaurants lists active
     */
    public function active()
    {
        return  view('admin.restaurants.active');
    }

    /**
     * for showing active manager
     * @return Restaurants lists
     */
    public function inactive()
    {
        return  view('admin.restaurants.inactive');
    }

    /**
     * for showing active manager
     * @return RestaurantCategory lists
     */
    public function categories()
    {
        $categories = Category::with(['restaurants'])->get();
        return  view('admin.restaurants.categories', compact(['categories']));
    }
}
