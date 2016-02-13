<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Site;

class RepositoryController extends Controller
{
    public function index() {
		
		$data['sites'] = Site::where('public', 1)->orderBy('updated_at', 'desc')->get();
		
		return view('repository.index', $data);	    
    }
}
