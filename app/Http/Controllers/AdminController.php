<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
 
    public function index() {
		
		return view('admin.admin');	    
    }
    
    public function addTheme(Request $request) {
	    
	    dd($request->file('file'));
    }
}
