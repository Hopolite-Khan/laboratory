<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($locale)
    {
        if (!in_array($locale, ['en', 'ar'])) abort(404);
        App::setlocale($locale);
        $lab = [
            [
                "feature" => asset('/img/tests-box-rtl.jpg'),
                "title" => "home.tests box",
                "description" => ""
            ]
        ];
        return view('landingPages.home');
    }


    public function qr_index()
    {
        return view('qr_code_index');
    }
}
