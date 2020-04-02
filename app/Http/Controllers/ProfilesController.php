<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
        return view('profiles.index', [
            'user' => $user,
        ]);

        
    }

    public function create() {
        return view('posts.create');
    }

}
