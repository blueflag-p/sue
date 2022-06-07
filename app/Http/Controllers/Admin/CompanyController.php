<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.company.assignform');
    }

    public function create()
    {
        return view('dashboard.child.create');
    }
    public function store(Request $request)
    {
       dd($request);
    }

}
