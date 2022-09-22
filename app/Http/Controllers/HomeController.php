<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()  {
        return view('landingPages.home');
    }


    public function qr_index(){
        return view('qr_code_index');
    }


}
