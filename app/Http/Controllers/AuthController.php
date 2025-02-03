<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view ('auth.register');
    }

    public function register (Request $request){

        $validated = $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z\s\'-]{2,30}$/'],
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'min:8', 'regex:/^\S+$/']
        ]);

        $user=User::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'password'=>bcrypt($validated['password'])
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }
}
