<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $user = User::where('id', $id)->first();
        //return $user;
        return view('user.edit')
            ->with('user', $user);


    }
    public function postEdit(Request $request,$id)
    {
        if (Auth::check()) {
            $form = $request->all();
            $user = User::where('id', $id)->first();

            $user->fill($form);

            if (isset($form['password'])) {
                $user->password = Hash::make($form['password']);
            }else{
                $user->password = Auth::User()->password;
            }
            //return $user;
            $user->save();

            return redirect()->route('home');
        }



    }

}
