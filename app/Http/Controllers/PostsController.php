<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'caption' => 'required',
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'], // Adjust the file types as needed
        ]);

        $imagePath = $request['image']->store('uploads','public');
        // Retrieve the authenticated user using auth()
        $user = auth()->user();

        // Create a new post for the authenticated user
        $user->posts()->create([
            'caption'=>$data['caption'],
            'image' =>$imagePath,
        ]);

        return redirect('/profile/'.$user->id);
    }
}
