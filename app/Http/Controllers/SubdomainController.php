<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubdomainController extends Controller
{
    public function toko()
    {
        // From URL to get webpage contents.
        $url = "https://toko.ly/majutokoku/home";
        
        // Initialize a CURL session.
        $ch = curl_init(); 
        
        // Return Page contents.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        //grab URL and pass it to the variable.
        curl_setopt($ch, CURLOPT_URL, $url);
        
        $result = curl_exec($ch);
        
        echo $result; 
    }
}
