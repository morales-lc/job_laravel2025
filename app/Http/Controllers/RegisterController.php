<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Usersinfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function showForm()
    {
        return view('registration');
    }

    public function register(RegisterRequest $request)
    {
        // Optional validation can be added later

        Usersinfo::create([
            'id' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'sex' => $request->sex,
            'birthday' => $request->birthday,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => 'Customer', // or any default value you want
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}