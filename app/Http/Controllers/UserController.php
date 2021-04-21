<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artical;

class UserController extends Controller
{
    public function video()
    {
    	$videos = Artical::all();

    	return view('user/video')->with('videos',$videos);
    }

    public function artical()
    {
    	$articals = Artical::all();

    	return view('user/user_view')->with('articals',$articals);
    }
}
