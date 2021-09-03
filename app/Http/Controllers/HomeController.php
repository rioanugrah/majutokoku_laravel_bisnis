<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['users'] = User::where('role','=',1)->count();
        return view('beranda.index', compact('data'));
    }
}
