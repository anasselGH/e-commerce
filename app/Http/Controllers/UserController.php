<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        
        // Set the session value in the constructor
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ses = session()->get('connection');
        $admin = session()->get('admin');
        // $users= Users::all();
        return view("welcome" ,["ses"=>$ses,'admin'=>$admin]);

    }
    public function updat(Request $request)
{
    $login = $request->email;
    $password = $request->password;

    $credentials = [
        'email' => $login,
        'password' => $password // Pass plain text password here
    ];

    if (Auth::attempt($credentials)) {
        session()->put('connection', 'connect');

        return redirect()->route('user.index');
    } else {
        session()->put('connection', 'déconecter');
        return redirect()->route('user.index');
    }
}
public function logout(){
Auth::logout();
session()->put('connection', 'déconecter');
return redirect()->route('user.index');

}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $code = "OWFDD205";
        $userData = $request->all();
        $userData['password'] = Hash::make($request->input('password'));
        if ($request->code == $code) {
            $userData['isAdmin'] = 'isAdmin'; 
            session()->put('admin', "isAdmin");
            User::create($userData);
        } else {
            $userData['isAdmin'] = 'not Admin'; 
            session()->put('admin', 'not Admin');
            User::create($userData);
        }
        
        return redirect()->route('user.index');
}
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
