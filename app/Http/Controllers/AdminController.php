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
	    
	    // Upload file
	    
	    $file = $request->file('file');
	    $name = $file->getClientOriginalName();
	    
	    if ($file->getClientOriginalExtension() !== 'zip') {
		    dd('No zip');
	    }
	    
	    $id = substr($name, 0, -4);
	    
	    $file->move('uploads', $name);
		
		$path = 'uploads/'.$name;
		
		// Unzip file
		
		$zip = new \ZipArchive;
		
		$res = $zip->open($path);
		
		if ($res === TRUE) {
			$zip->extractTo('uploads/sites/');
			$zip->close();	
		}
	    
	    // Validation
	    
	    	// Check if already exists in database
	    
	    	// Check if it's really a zip archive
		
		// Check if json file exists and is valid
				
		// Check if logo exists and is valid
		
		// Create record in database
		
		// Delete ZIP file
		
		unlink($path);
		
		// Return to framework list
	 	    
	    dd($id);
    }
    
    public function deleteTheme() {
	    
	    dd('Delete theme');
    }
}
