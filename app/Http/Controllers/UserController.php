<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            'first_name' => 'required|min:2|max:15',
            'last_name' => 'required|min:2|max:15',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'user_name' => 'required|alpha_num',
            'password' => 'required|confirmed'
        ];
        $message = [

            'first_name' => 'required|min:2|max:15',
            'last_name' => 'required|min:2|max:15',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'date_of_birth' => 'required|date',
            'user_name' => 'required|alpha_num',
            'password' => 'required|confirmed'
        ];
        $validator = Validator::make($request->all(),$rules,$message);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $request->validate($rules,$message);

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


        // $profile = new Profile();
        // $profile->owner_id = $user->id;
        // $profile->profile_pic = $profile_pic;
        // $profile->bio = $bio;
        // $profile->address = $address;
        // $profile->save();





        return redirect(route('user.create'));
    }
}
