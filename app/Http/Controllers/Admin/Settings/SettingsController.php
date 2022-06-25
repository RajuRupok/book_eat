<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;

use App\Models\Category;
use App\User;

class SettingsController extends Controller
{

    /**
     * Constructor
     *
     * @return Middleware
     */
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }


    /**
     * showing create form
     */
    public function createManager()
    {
        return view('admin.settings.create_manager');
    }


    /**
     * showing create form
     */
    public function createCategory()
    {
        return view('admin.settings.create_category');
    }

    /**
     * store manager
     * @return redirect view page
     */
    public function storeManager(Request $request)
    {
        // dd($request);
        $avatar = $address = null;
        // validate user input data here...
        if($request->hasFile('avatar')){

            $this->validate($request, array(
                "avatar" => 'required | image | mimes:jpeg,png,jpg,gif,svg | max:1024',
            ));

            $image_data=file_get_contents($request->avatar);

            $encoded_image=base64_encode($image_data);

            $avatar = 'data:image/png;base64,'.$encoded_image;
        }

        $this->validate($request, array(
            "name"          => "required | string | max: 191",
            "username"      => "required | string | max:20 | unique:users",
            "email"         => "required | email | max:255 | unique:users",
            "password"      => "required | string | min:8",
        ));

        if($request->address != null){
            $this->validate($request, array(
                "address" => "required | string"
            ));
            $address = $request->address;
        }

        $manager = new User();

        $manager->role_id        =      2;
        $manager->name           =      $request->name;
        $manager->username       =      $request->username;
        $manager->email          =      $request->email;
        $manager->password       =      Hash::make($request->password);
        $manager->address        =      $address;
        $manager->avatar         =      $avatar;

        // dd($manager);
        $manager->save();


        //Confirmation Message Here
        toast('New Manager Has Been Assigned!','success')->autoclose(5000);

        return redirect()->route('admin.managers.active');
    }

    /**
     * store category
     * @return redirect view page
     */
    public function storeCategory(Request $request)
    {
        $this->validate($request, array(
            "name"          => "required | string | max: 60",
        ));

        $category = new Category();

        $category->name = $request->name;

        if($category->save())
            toast('New Category Has Been Assigned!','success')->autoclose(5000);
        else
            toast('Category Does Not Assigned!','error')->autoclose(5000);

        return redirect()->route('admin.restaurants.categories');
    }

    /**
     * update category
     * @return redirect view page
     */
    public function updateCategory(Request $request)
    {
        $this->validate($request, array(
            "name"          => "required | string | max: 60",
        ));

        $category = Category::findOrFail($request->id);

        $category->name = $request->name;

        if($category->save())
            toast('New Category Has Been Updated!','success')->autoclose(5000);
        else
            toast('Category Does Not Updated!','error')->autoclose(5000);

        return redirect()->route('admin.restaurants.categories');
    }

    public function changeStatus($user_id, $role)
    {
        $user = User::findOrFail(decrypt($user_id));
        // dd($user);

        $user->status = ($user->status == 1) ? 0 : 1;

        $user->save();

        //Confirmation Message Here
        if($user->status == 0){
            $route = 'admin.'.$role.'.inactive';
            toast('The User Has Been Deactivated!','error')->autoclose(5000);
            return redirect()->route($route);
        }
        else{
            $route = 'admin.'.$role.'.active';
            toast('The User Has Been Activated!','success')->autoclose(5000);
            return redirect()->route($route);
        }
    }
}

