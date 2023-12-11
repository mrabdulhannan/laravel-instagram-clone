<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user)
    {
        $user = \App\Models\User::findorFail($user);
        return view('profiles.index',[
            'user' => $user,
        ]);
    }
}
