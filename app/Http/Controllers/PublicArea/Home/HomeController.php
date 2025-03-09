<?php

namespace App\Http\Controllers\PublicArea\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('public-area.Pages.Home.index');
    }
}
