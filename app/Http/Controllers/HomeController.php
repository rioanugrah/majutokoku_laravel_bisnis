<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['users'] = User::where('role','=',1)->count();
        $data['maintenance'] = Maintenance::where('url','!=','/')->get();
        
        return view('beranda.index', $data);
    }
}
