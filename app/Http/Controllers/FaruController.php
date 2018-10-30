<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class FaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$slide=\App\slide::all();
		$offer=\App\hm_offer::all();

		return view('faru.index',compact('slide','offer'));
    }
	public function aboutus(){
        $about=\App\hm_about::all();
		
		return view('faru.aboutus',compact('about'));	
	}
	
	public function booking(){
		
		return view('faru.booking');	
	}
	
	//start booking insert=== 
	public function bookingstore(Request $request)
    {
        $passport= new \App\hm_front_booking;
        $passport->name=$request->get('name');
        $passport->address=$request->get('address');
        $passport->contact_no=$request->get('contact_no');
	    $passport->check_in=$request->get('check_in');
        $passport->check_out=$request->get('check_out');
        $passport->email=$request->get('email');
        $passport->bed_type=$request->get('bed_type');
   $passport->room_con=$request->get('room_con');      
		$passport->status=1;
        $passport->save();
        
        return redirect('booking')->with('alert', 'Information has been Sent');		

    }	
	//end booking insert

	public function contactus(){
		
		return view('faru.contactus');	
	}
	
	public function contactstore(Request $request)
    {
        $passport= new \App\enq;
        $passport->name=$request->get('name');
        $passport->email=$request->get('email');
        $passport->message=$request->get('comments');

        $passport->phone='';
		$passport->status=1;
        $passport->save();
        
        return redirect('contactus')->with('alert', 'Information has been Sent');		

    }	
	public function gallery(){
		
		$gallery=\App\hm_gallery::all();
		
		return view('faru.gallery',compact('gallery'));	
	}			
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
