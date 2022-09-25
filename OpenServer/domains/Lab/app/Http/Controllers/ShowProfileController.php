<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfileController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function show($name=null)
    {
        return view('show', [
            'username' => $name
        ]);
    }
    
    public function list() 
    {
        $users = [
            'Komil',
            'Halim',
            'Salim',
            'Qamar'
        ];

        return view('list', compact('users'));
    }



}
