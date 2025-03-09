<?php

namespace App\Http\Controllers\PublicArea\AboutUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{

    public function index()
    {
        return view('public-area.Pages.About-us.index');
    }
}
