<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.assign.assign-child-forms');
    }
}
