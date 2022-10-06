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
    public function index()
    {
        // if (!in_array($locale, ['en', 'ar'])) abort(404);
        // App::setlocale($locale);
        $labs = collect([
            [
                "title" => "test",
                "description" => ""
            ]
        ]);

        return view('landingPages.home', ['labs' => $labs]);
    }


    public function qr_index()
    {
        return view('qr_code_index');
    }
}
