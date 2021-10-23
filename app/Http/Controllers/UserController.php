<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
       $users = User::all();
    //    dd($users);
        return view('users.showAllUsers',compact('users'));
    }
    public function create()
    {
        return view('users.createUser');
    }
    public function store(Request $request)
    {
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $date_of_birth = $request->input('date_of_birth');
        $user_name = $request->input('user_name');





        $user = new User();
        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->phone = $phone;
        $user->date_of_birth = $date_of_birth;
        $user->user_name = $user_name;


        $profile_pic = $request->input('profile_pic');
        $bio = $request->input('bio');
        $address = $request->input('address');
        $user->save();


        $profile = new Profile();
        $profile->profile_pic = $profile_pic;
        $profile->bio = $bio;
        $profile->address = $address;
        ($res = $profile->users());
      $profile->owner_id= $res;
      dd($profile);




        $profile->save();

        return redirect(route('user.create'));
    }
}
