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
	
	public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index() {
		
		$data['section_id'] = 'sites';
		
		$data['sites'] = Site::orderBy('updated_at', 'desc')->get();
		
		return view('admin.sites', $data);	    
    }
    
    public function addSite(Request $request) {
	    
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
	 	    
	    return $site;
    }
    
    public function deleteSite($id) {
		
		// Find site
		$site = Site::findOrFail($id);
		
		if (!$site) return redirect('admin');
		
		// Delete files
	    $theme_path = public_path().'/uploads/sites/'.$site->site_id;
	    File::deleteDirectory($theme_path);
	    
	    // Delete backup
	    unlink($site->backup);
	    
	    // Delete record in database
	    $site->delete();
	    
	    return redirect('admin');
    }
    
    public function publishSite($id) {
	    
	    // Find site
		$site = Site::findOrFail($id);
		
		$new_status = ($site->public === 0) ? 1 : 0;
		
		$site->public = $new_status;
		
		$site->save();
		
		return redirect('admin');
    }
    
    public function docs() {
	    
	    $filename = public_path().'/static/admin/docs/test.json';
	    
	    try
		{
		    $contents = File::get($filename);
		}
		catch (Illuminate\Filesystem\FileNotFoundException $exception)
		{
		    die("The file doesn't exist");
		}
	    
	    $data['section_id'] = 'docs';
	    $data['content'] = $contents;
	    
	    return view('admin.docs', $data);
    }
}
