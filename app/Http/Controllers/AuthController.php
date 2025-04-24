<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usersinfo;

class AuthController extends Controller
{
    //

    public function login(LoginRequest $request)
    {
        //
        $user = Usersinfo::where('username', $request->username)->first();

        if ($user && \Hash::check($request->password, $user->password)) {
            session(['user' => $user]); 
            return redirect()->route('dashboard');
        }
    
        return back()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }

    public function showLoginForm()
    {
        return view('login');
    }
}
