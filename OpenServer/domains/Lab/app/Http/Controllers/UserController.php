<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name=null) {

        $plans = ['free', 'premium', 'gold'];

        return view('users.show', [
            'username' => $name,
            'plans' => $plans
        ]);
    }

    public function list() 
    {
        $users = [
            'Salim',
            'Halim',
            'Tolib',
            'Qobil'
        ];

        $plans = ['free', 'premium', 'gold'];

        return view('users.list', compact('users','plans'));
    }
}
