<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about () {
	    $name = "Virgil Mihai";
	    return view('pages.about')->with('name', $name);
    }

	public function contact () {
		return view('pages.contact');
	}


}
