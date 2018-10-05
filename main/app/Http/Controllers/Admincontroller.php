<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    public function index()
    {
    	return view('admin.charts');
    }
    public function formindex()
    {
    	return view('admin.forms');
    }
    public function createuser()
    {
    	return view('admin.user.create');
	}
	
}
