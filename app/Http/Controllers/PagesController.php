<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index(){
		
        $title = 'This is our Home Page';
        return view('pages.index', compact('title'));
        //return view('pages.index')->with('title', $title);	
		}
	public function about(){
        $title = 'This is about page';
        return view('pages.about', compact('title'));
        //return view('pages.index')->with('title', $title);		
	}
	public function service() {
        $title = 'This is service page';
        return view('pages.service', compact('title'));
        //return view('pages.index')->with('title', $title);		
	}
	public function zin($id,$name,$taklu){
		print $id." ".$name." ".$taklu;	
		
	}
	
}
