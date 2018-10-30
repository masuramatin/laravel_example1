<?php
namespace App\Http\Controllers;
use Illuminate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;
use App\hm_food_items;
use session;
use Illuminate\Http\Request;
use App\booking;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		return view('admin.index');
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
    public function food()
    {
        //
		$hm_food_items=\App\hm_food_items::all();
        return view('admin.food',compact('hm_food_items'));
    }
	
	public function food_create()
    {
        return view('admin.food_create');		
    }
	
    public function edit_food($id)
    {
 		$passport = \App\hm_food_items::find($id);
		
        return view('admin.edit_food',compact('passport','id'));		
    }	

	
    public function update_food(Request $request, $id)
    {
        //
//print_r($id);exit;
        $blog = new hm_food_items;

//get post data
        $postData = Request::all();

        //update post data
        hm_food_items::find($id)->update($postData);

        return redirect('food');
    }		
	public function fdstore(Request $request)
    {
        //
        $passport= new \App\hm_food_items;
        $passport->food_name=$request->post('food_name');
        $passport->description=$request->post('description');
        $passport->price=$request->post('price');


		$passport->status=1;
        $passport->save();
        
        return redirect('food')->with('success', 'Information has been added');		

    }


public function destroy_food($id)
    {
        $passport = \App\hm_food_items::find($id);
        $passport->delete();
        return redirect('food')->with('success','Information has been  deleted');
    }
	
			
	public function adminbooking()
    {
		$book=\App\booking::all();
        return view('admin.book',compact('book'));		
    }
	
	public function adminbooking_create()
    {
        return view('admin.book_create');		
    }
	public function bkstore(Request $request)
    {
        //
		

        $passport= new \App\booking;
        $passport->client_id=$request->get('client_id');
        $passport->room_num=$request->get('room_num');
        $passport->room_type=$request->get('room_type');

        $passport->check_in=$request->get('check_in');
        $passport->check_out=$request->get('check_out');
		$passport->status=1;
        $passport->save();
        
        return redirect('adminbooking')->with('success', 'Information has been added');		

    }
	
    public function edit_book($id)
    {
		
 		$passport = \App\booking::find($id);
		
        return view('admin.edit_book',compact('passport','id'));		
    }
	
public function destroy_book($id)
    {
        $passport = \App\booking::find($id);
        $passport->delete();
        return redirect('book')->with('success','Information has been  deleted');
    }			
//goods		
	public function goods()
    {
        //
		$hm_cleaning_supp=\App\hm_cleaning_supp::all();

        return view('admin.goods',compact('hm_cleaning_supp'));		
    }
	
	public function goods_create()
    {
        return view('admin.goods_create');		
    }
	public function gdstore(Request $request)
    {
        //
		

        $passport= new \App\hm_cleaning_supp;
        $passport->item_name=$request->get('item_name');
        $passport->num_of_item=$request->get('num_of_item');
        $passport->receive_date=$request->get('receive_date');

        $passport->uses_item=0;
        $passport->stock_item=0;
        $passport->item_washing_date="";
		
		
		$passport->status=1;
        $passport->save();
        
        return redirect('goods')->with('success', 'Information has been added');		

    }
//employee start				
	public function employee()
    {
		$emp=\App\emp::all();
        return view('admin.employee',compact('emp'));
    }
	public function employee_create()
    {
        return view('admin.employee_create');		
    }
	public function empstore(Request $request)
    {
        //
		

        $passport= new \App\emp;
        $passport->name=$request->get('name');
        $passport->designation=$request->get('designation');
        $passport->date_of_birth=$request->get('date_of_birth');

        $passport->address=$request->get('address');
        $passport->contrct_no=$request->get('contrct_no');
        $passport->email=$request->get('email');
		
        $passport->gender=$request->get('gender');
        $passport->marital_status=$request->get('marital_status');
        $passport->joining_date=$request->get('joining_date');		
		
       $passport->bank_account_details=$request->get('bank_account_details');
        $passport->image=$request->get('image');
        
		$passport->status=1;
        $passport->save();
        
        return redirect('employee')->with('success', 'Information has been added');		

    }	
//employee end		
	public function front()
    {
        //
		$slide=\App\slide::all();

        return view('admin.front',compact('slide'));		
		

    }
//laundry start
	public function laundry()
    {
        //
		$hm_laundry=\App\hm_laundry::all();

        return view('admin.laundry',compact('hm_laundry'));

    }
	
	public function laundry_create()
    {
        return view('admin.laundry_create');		
    }
	
	public function lystore(Request $request)
    {
        //
		

        $passport= new \App\hm_laundry;
        $passport->client_id=$request->get('client_id');
        $passport->order_date=$request->get('order_date');
        $passport->delivery_date=$request->get('delivery_date');

        $passport->number_of_cloth=$request->get('number_of_cloth');
        $passport->service_charge=$request->get('service_charge');
        $passport->type_of_washing=$request->get('type_of_washing');
		
        $passport->cloth_type=$request->get('cloth_type');
        $passport->comment=$request->get('comment');		
		$passport->status=1;
        $passport->save();
        
        return redirect('laundry')->with('success', 'Information has been added');		

    }			
//laundry end		
	public function enquiry()
    {
        //
		//return view('admin.enquiry');
		$enqs=\App\enq::all();
        return view('admin.enquiry',compact('enqs'));		
    }
	public function transport()
    {
        //
		$transport=\App\transport::all();

        return view('admin.transport',compact('transport'));		


    }
	
	public function transport_create()
    {
        //
		return view('admin.transport_create');		


    }
	public function trstore(Request $request)
    {
        //
        $passport= new \App\transport;
        $passport->transport_id=$request->get('transport_id');
        $passport->type_of_transport=$request->get('type_of_transport');
        
		$passport->status=1;
        $passport->save();
        
        return redirect('transport')->with('success', 'Information has been added');		

    }		
	public function accounts()
    {
        //return view('admin.accounts');
		$accounts=\App\accounts::all();
        return view('admin.accounts',compact('accounts'));		
    }
	public function client()
    {
		$guest=\App\guest::all();
        return view('admin.client',compact('guest'));		
		//return view('admin.client');
    }
	public function client_create()
    {
        return view('admin.client_create');		
    }
	public function clstore(Request $request)
    {
        //
        $passport= new \App\guest;
        $passport->name=$request->get('name');
        $passport->address=$request->get('address');
        $passport->contact=$request->get('contact');

        $passport->national_id=$request->get('national_id');
        $passport->passport=$request->get('passport');
        $passport->client_image=$request->get('client_image');
		
		//$passport->status=1;
        $passport->save();
        
        return redirect('client')->with('success', 'Information has been added');		

    }			
}

