<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function register() {
        return view('auths.register');
    }
    // --------------------- [ User login ] ---------------------
    public function userLogin(Request $request)
    {
        $request->session()->put('data',$request->input());
        if(Auth::attempt($request->session()->get('data'))) {
            return redirect('mainView');   
        }
        return back()->with('error', 'Whoops! invalid username or password.');
    }
    // --------------------- [ Register user ] ----------------------
    public function userPostRegistration(Request $request)
    {
        $user = new User();
        $user->firstname = $request->fname;
        $user->lastname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/');     
    }
    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request)
    {
        $request->session()->forget('data');
        return redirect('/');
    }

    public function updateUser($id,Request $request)
    { 

        $user = User::find($id);
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));

        $user->save();

        return back();
    }


     //change photo of users
     public function addoreditprofile(){
        $auth = Auth::user();
        request()->validate([
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->picture->getClientOriginalExtension();
        request()->picture->move(public_path('/images/'), $imageName);

        $auth -> profile = $imageName;

        $auth -> save();
        return back();
    }

    
    public function imagedestroy($id)
{
    // Auth::user()->profile->default('user.png');
    // Auth::user()->profile->save();
    //  User::where('profile',Auth::user()->profile)->get()->delete();
    $user = User::find($id);
    $user = Auth::user()->profile;
    $user->delete();
    return back();

}

}
