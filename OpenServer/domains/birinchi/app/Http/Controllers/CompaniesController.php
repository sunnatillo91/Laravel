<?php

namespace App\Http\Controllers;

use app\models\Company;
use App\Models\Company1;
use App\Models\Test;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    public function index(Request $request)
    {
        // return 12;
        $companies = Company1::get();
        return $companies;
        return view('companies.index', [
            'companies' => $companies
        ]);
    }

   
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}
