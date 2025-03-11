<?php

namespace App\Http\Controllers\MemberArea\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Welcome\UserWelcomeNotification; // Ensure this path is correct
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $user->notify(new UserWelcomeNotification()); // Correct the instantiation
        return view('member-area.Pages.Dashboard.index');
    }
}
