<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;

use App\Site;
use DateTime;

class AdminController extends Controller
{
 
    public function index() {
		
		$data['sites'] = Site::all();
		
		return view('admin.admin', $data);	    
    }
    
    public function addTheme(Request $request) {
	    
	    // Upload file
	    
	    $file = $request->file('file');
	    $name = $file->getClientOriginalName();
	    
	    // Check if it's really a zip archive
	    
	    if ($file->getClientOriginalExtension() !== 'zip') {
		    dd('No zip');
	    }
		
		// Unzip file
		
		$id = substr($name, 0, -4);
	    
	    $file->move('uploads', $name);
		
		$path = 'uploads/'.$name;
		
		$zip = new \ZipArchive;
		
		$res = $zip->open($path);
		
		if ($res === TRUE) {
			$zip->extractTo('uploads/sites/');
			$zip->close();	
		}
	    	    
		// Check if json file exists and is valid
		
		$theme_path = public_path().'/uploads/sites/'.$id.'/theme.json';
		
		json_decode($theme_path);
		
		if (!File::exists($theme_path) || json_last_error() != 4) {
			dd('No valid json file!');
		}
				
		// Check if logo exists and is valid
		
		if (!File::exists(public_path().'/uploads/sites/'.$id.'/logo.svg')) {
			dd('No valid logo file!');
		}
		
		
		// Theme is valid!
		
		// Check if already exists in database
		
		$site = Site::where('site_id', $id)->first();
		
		if (!$site) {
			
			// Create record in database
			
			$site = new Site;
		}
		else {
			// Delete old theme and old backup
			unlink($site->backup);
		}
		
		// Create backup
		
		$now = new DateTime();
		
		$backup_path = public_path().'/uploads/backups/'.$now->getTimestamp().'_'.$name;
		
		copy($path, $backup_path);
		
		// Update record in database
		$site->backup = $backup_path;
		$site->site_id = $id;
		$site->save();
			
		// Delete ZIP file
		
		unlink($path);
		
		// Return to framework list
	 	    
	    dd($id);
    }
    
    public function deleteTheme() {
	    
	    dd('Delete theme');
    }
}
