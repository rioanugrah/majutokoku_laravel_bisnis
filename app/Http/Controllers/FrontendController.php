<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portal;
use App\Models\Kategori;

class FrontendController extends Controller
{
    public function index()
    {
        $data['portal'] = Portal::all();
        $data['kategori'] = Kategori::all();
        return view('frontend.index', $data);
    }
}
