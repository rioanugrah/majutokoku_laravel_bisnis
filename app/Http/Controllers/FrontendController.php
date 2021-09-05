<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portal;
use App\Models\Kategori;
use App\Models\Maintenance;

class FrontendController extends Controller
{
    public function index()
    {
        $data['portal'] = Portal::all();
        $data['kategori'] = Kategori::all();
        $maintenance = Maintenance::where('url','/')->first();
        
        if($maintenance->status != 'Aktif'){
            return view('frontend.index', $data);
        }else{
            return view('maintenance.index', compact('maintenance'));
        }

    }
}
