<?php

namespace residency\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showLogin() {
    	return view('/login');
    }
}
