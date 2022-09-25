<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function members()
    {
        $members = [
            // 'Rasul Hamzatov',
            // 'Qosim To\'qayev',
            // 'Azamat Tursunov'
        ];
        return view('members', compact('members'));
    }

    public function about()
    {
        return view('about');
    }
}
