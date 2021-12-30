<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Ads;

class Basecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show user profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function profile()
    {
        $user_id = Auth::id();

        $ad = Ads::where('user_id', $user_id)->with('category')->first();
        return view('layouts.profile', ['ad' => $ad]);
    }

    // function register()
    // {
    //     return view('layouts.register');
    // }

    // function login()
    // {
    //     return view('layouts.login');
    // }

    // function loadIn(Request $request)
    // {
    //     //Validation of inputs
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|max:20',
    //         'confirm' => 'required_with:password|same:password|min:8|max:20'
    //     ]);

    //     //Sending data to the database
    //     $user = new User;
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);
    //     $save = $user->save();

    //     if ($save) {
    //         return back()->with('success', 'New user has been added successfully to the system');
    //     } else {
    //         return back()->with('fail', 'Something went wrong, please try again later');
    //     }
    // }

    // function check(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required|min:8|max:20',
    //     ]);

    //     $userInfo = User::where('email', '=', $request->email)->first();

    //     if (!$userInfo) {
    //         return back()->with('fail', 'We do not recongize your email address');
    //     } else {
    //         //Check password
    //         if (Hash::check($request->password, $userInfo->password)) {
    //             $request->session()->put('LoggedUser', $userInfo->id);
    //             return redirect('/');
    //         } else {
    //             return back()->with('fail', 'Incorrect password');
    //         }
    //     }
    // }
    // function logout()
    // {
    //     if (session()->has('LoggedUser')) {
    //         session()->pull('LoggedUser');
    //         return redirect('/');
    //     }
    // }
    // function index()
    // {
    //     $data = ['LoggedUserInfo' => User::where('id', '=', session('LoggedUser'))->first()];
    //     return view('layouts.home', $data);
    // }


}
