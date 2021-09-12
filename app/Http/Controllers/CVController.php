<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;

class CVController extends Controller
{
    public function index()
    {
        $link = 'curriculum';

        $maintenance = Maintenance::where('url',$link)->first();

        $array_message = array(
            'success' => false,
            'message_title' => 'Maintenance',
            'message_content' => $maintenance->deskripsi,
            'message_type' => 'warning',
        );

        if($maintenance->status != 'Aktif'){
            return view('cv.index');
        }else{
            return redirect()->back()->with($array_message);
            // return response()->json($array_message);
        }
    }
}
