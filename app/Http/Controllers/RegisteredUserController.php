<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate user
        $userAttributes = $request->validate([
           'name' => ['required'],
           'email' => ['required', 'email', 'unique:users,email'],
           'password' => ['required', 'confirmed',Password::min(6)],
        ]);

        //validate employer
        $employerAttributes = $request->validate([
           'employer' => ['required'],
           'logo' => ['required',File::types(['png','jpg','jpeg','webp'])],
        ]);

        //create user
        $user = User::create($userAttributes);

        //store logo
        $logoPath = $request->logo->store('logos');

        //create employer
        $user->employer()->create([
            'name' => $employerAttributes['employer'],
            'logo' => $logoPath
        ]);


        Auth::login($user);

        return redirect('/');


    }

}