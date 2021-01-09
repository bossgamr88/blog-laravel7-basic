<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    // index route 
    public function index(){
        # ส่งข้อมูล ตัวเเปร 
        $name = 'john dev';
        $website = 'bosposblog.com';
        return view('about',[
            'name' => $name,
            'website' => $website,
        ]);
    }
}
