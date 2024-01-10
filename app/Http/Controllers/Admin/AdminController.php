<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{   
       public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin")->withSuccess('Login details are not valid');
    }

     public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("admin.dashboard")->withSuccess('You have signed-in');
    }


 public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('admin.dashboard');
        }
  
        return redirect("admin.login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('admin');
    }
    
    public function admin(){
        return view('admin.login');
    }



    public function users(){
        return view('admin.registration');
    }


     public function profile(){
      if(Auth::check()){
        return view('admin.profile');
     }

    }
}
