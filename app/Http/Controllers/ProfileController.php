<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\User;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id)->first();
        $profiles = Profile::where('user_id', auth()->user()->id)->first();

        // if($profiles)
        return view('profile.index', compact('user','profiles'));
    }
}
