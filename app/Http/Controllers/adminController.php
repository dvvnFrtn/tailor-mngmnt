<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboardTambah()
    {
        return view('admin.dashboardTambah');
    }

    public function dashboardEdit()
    {
        return view('admin.dashboardEdit');
    }
}
