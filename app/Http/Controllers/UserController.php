<?php

namespace App\Http\Controllers;

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


        $user->save();
        return redirect(route('user.create'));
    }
}
