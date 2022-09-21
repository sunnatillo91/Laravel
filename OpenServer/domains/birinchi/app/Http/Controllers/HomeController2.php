<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController2 extends Controller
{
    public function index() 
    {
        return view('app');
    }
    public function members() 
    {   
        $members = [
            'Karimov Salim',
            'Olimov Shuhrat',
            'Qobilov Tolib',
            'Pirnazarov O\'tkir'
        ];
        return view('members', compact('members'));
    }
    public function about() 
    {
        return view('about');
    }
}
