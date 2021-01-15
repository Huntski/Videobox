<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $popular = Video::orderBy('views', 'desc')->get();

        return view('home', [
            'popular' => $popular
        ]);
    }
}
