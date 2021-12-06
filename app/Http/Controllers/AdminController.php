<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/admin_landing');
    }

    public function roles()
    {
        return view('admin/roles');
    }

    public function registeredStaff()
    {
        return view('admin/registered_staff');
    }

    public function addStaff()
    {
        return view('admin/add_staff');
    }

    public function registeredPatients()
    {
        return view('admin/registered_patients');
    }    


}