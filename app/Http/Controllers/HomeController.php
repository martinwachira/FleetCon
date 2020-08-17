<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/main');
    }

    public function addUser(){
        return view('auth.register');
    }

    public function postAddUser(Request $request){        
        $newUser = new User();
        $newUser->from_api = 0;
        $newUser->verify_password = 0;
        $newUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $newUser->fill($request->all())->save();  

        return redirect('/users')->with('success', 'User Added');
    }

    public function viewUsers()
    {
        return view('Settings.Users.view');
    }
    
    public function users()
    {
        $allusers = User::all();
        return view('Settings.Users.view')->with(['users'=>$allusers]);
    }
}
