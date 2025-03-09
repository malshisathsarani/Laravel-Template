<?php

namespace App\Http\Controllers\MemberArea\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('member-area.Pages.Dashboard.index');
    }
}
