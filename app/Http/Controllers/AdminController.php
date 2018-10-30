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


class AdminController extends Controller
{
	
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequest()

    {

        //return view('ajaxRequest');

    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function ajaxRequestPost()

    {
		$id = $_GET['name'];
		$column = 'client_id';
		
 		$passport_pay = \App\payment::where($column , '=', $id)
		->orderBy('created_at', 'DESC')
		->first();
		
	

		return $passport_pay;
		
        //return view('admin.book',compact('passport_pay','id'));
		//Response::json($passport_pay);		
//return response()->json(['success'=>'Data is successfully added']);

    }	
    public function ajaxRequestPost1()

    {
		$id = $_GET['name'];
		$column = 'client_id';
		
 		$data = DB::table("payments")
	    ->select(DB::raw("SUM(client_pay) as count"))
		->where('client_id',$id)->get();
		foreach ($data as $key => $dat) {
		$tot = $dat->count;
		}
		
	

		return $tot;
		
        //return view('admin.book',compact('passport_pay','id'));
		//Response::json($passport_pay);		
//return response()->json(['success'=>'Data is successfully added']);

    }	
public function destroy_payment($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\payment::find($id);
        $passport->delete();
        return redirect('/adminbooking')->with('success','Information has been  deleted');
    }	
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
		$hm_food_items=\App\hm_food_items::paginate(5);
		$food_distribute=\App\food_distribute::paginate(5);
			
	
        return view('admin.food',compact('hm_food_items','food_distribute'));
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
        $passport= \App\hm_food_items::find($id);
		$food_image = $request->file('food_image');
		
		$input['imagename'] = time().'.'.$food_image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$food_image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);		
		
        $passport->food_name=$request->get('food_name');
        $passport->description=$request->get('description');
        $passport->price=$request->get('price');
        $passport->food_image=$input['imagename'];
		
		$passport->status=1;
        $passport->save();

        return redirect('/food');
    }		
	public function fdstore(Request $request)
    {
        //
        $passport= new \App\hm_food_items;
		$food_image = $request->file('food_image');
		
		$input['imagename'] = time().'.'.$food_image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$food_image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);
				
        $passport->food_name=$request->get('food_name');
        $passport->description=$request->get('description');
        $passport->price=$request->get('price');
        $passport->food_image=$input['imagename'];


		$passport->status=1;
        $passport->save();
        
        return redirect('/food')->with('success', 'Information has been added');		

    }


public function destroy_food($id)
    {
        $passport = \App\hm_food_items::find($id);
        $passport->delete();
        return redirect('/food')->with('success','Information has been  deleted');
    }
	
    public function food_distribute()
    {
        //
		$food_distribute=\App\food_distribute::paginate(5);
			
	
        return view('admin.food',compact('food_distribute'));
    }	
    public function food_distribute_create()
    {
        //
		//$hm_food_items=\App\hm_food_items::paginate(8);
        //$room= DB::table('room_infos')
         //     ->get();
        $booking=\App\hm_front_booking::all();
		$room = DB::table('room_infos')->where('room_status', 'NBL')->get();			  
			  
        $food_items= DB::table('hm_food_items')
              ->get();			  
		$exis_client=DB::table('payments')
              ->where('client_due','>',0)->get();
					
return view('admin.food_distribute_create',compact('exis_client','room','food_items'));
    }
    public function food_distribute_store(Request $request)
    {
        //
        $passport= new \App\food_distribute;
        $passport->client_id=$request->get('client_id');
        $passport->room_no=$request->get('room_no');
        $passport->food_item1=$request->get('food_item1');
        $passport->cost1=$request->get('cost1');
		$passport->bati1=$request->get('bati1');
		
		$passport->food_item2=$request->get('food_item2');
        $passport->cost2=$request->get('cost2');
		$passport->bati2=$request->get('bati2');
		
		$passport->food_item3=$request->get('food_item3');
        $passport->cost3=$request->get('cost3');
		$passport->bati3=$request->get('bati3');
		
		$passport->food_item4=$request->get('food_item4');
        $passport->cost4=$request->get('cost4');
		$passport->bati4=$request->get('bati4');
		
		$passport->food_item5=$request->get('food_item5');
        $passport->cost5=$request->get('cost5');
		$passport->bati5=$request->get('bati5');
		
		$passport->food_item6=$request->get('food_item6');
        $passport->cost6=$request->get('cost6');
		$passport->bati6=$request->get('bati6');
		
		$passport->food_item7=$request->get('food_item7');
        $passport->cost7=$request->get('cost7');
		$passport->bati7=$request->get('bati7');
		
		$passport->food_item8=$request->get('food_item8');
        $passport->cost8=$request->get('cost8');
		$passport->bati8=$request->get('bati8');
		
		$passport->food_item9=$request->get('food_item9');
        $passport->cost9=$request->get('cost9');
		$passport->bati9=$request->get('bati9');
		
		$passport->food_item10=$request->get('food_item10');
        $passport->cost10=$request->get('cost10');
		$passport->bati10=$request->get('bati10');
		
		$passport->cdate=$request->get('cdate');
		
		$passport->status=1;
        $passport->save();
        
        return redirect('/food')->with('success', 'Information has been added');
    }
	
public function destroy_food_distribute($id)
    {
        $passport = \App\food_distribute::find($id);
        $passport->delete();
        return redirect('/food')->with('success','Information has been  deleted');
    }	
	
    public function edit_food_distribute($id)
    {
        $booking=\App\hm_front_booking::all();
		$room = DB::table('room_infos')->where('room_status', 'NBL')->get();			  
			  
        $food_items= DB::table('hm_food_items')
              ->get();			  
		$exis_client=DB::table('payments')
              ->where('client_due','>',0)->get();		
 		$passports = \App\food_distribute::find($id);
		
        return view('admin.edit_food_distribute',compact('passports','id','exis_client','room','food_items'));		
    }		
public function fooddistributeupdate(Request $request, $id){

$passport= \App\food_distribute::find($id);
$passport->client_id=$request->get('client_id');
        $passport->room_no=$request->get('room_no');
        $passport->food_item1=$request->get('food_item1');
        $passport->cost1=$request->get('cost1');
		$passport->bati1=$request->get('bati1');
		
		$passport->food_item2=$request->get('food_item2');
        $passport->cost2=$request->get('cost2');
		$passport->bati2=$request->get('bati2');
		
		$passport->food_item3=$request->get('food_item3');
        $passport->cost3=$request->get('cost3');
		$passport->bati3=$request->get('bati3');
		
		$passport->food_item4=$request->get('food_item4');
        $passport->cost4=$request->get('cost4');
		$passport->bati4=$request->get('bati4');
		
		$passport->food_item5=$request->get('food_item5');
        $passport->cost5=$request->get('cost5');
		$passport->bati5=$request->get('bati5');
		
		$passport->food_item6=$request->get('food_item6');
        $passport->cost6=$request->get('cost6');
		$passport->bati6=$request->get('bati6');
		
		$passport->food_item7=$request->get('food_item7');
        $passport->cost7=$request->get('cost7');
		$passport->bati7=$request->get('bati7');
		
		$passport->food_item8=$request->get('food_item8');
        $passport->cost8=$request->get('cost8');
		$passport->bati8=$request->get('bati8');
		
		$passport->food_item9=$request->get('food_item9');
        $passport->cost9=$request->get('cost9');
		$passport->bati9=$request->get('bati9');
		
		$passport->food_item10=$request->get('food_item10');
        $passport->cost10=$request->get('cost10');
		$passport->bati10=$request->get('bati10');
		
		$passport->cdate=$request->get('cdate');
		
		$passport->status=1;
        $passport->save();
        return redirect('/food');
}


public function food_distribute_invoice($id){
		$products=DB::table('food_distributes')->
		where('client_id',$id)->get();
		
        return view('admin.view_food_distribute_invoice',compact('products'));
		
	
}
public function search_fd(Request $request){
	
	if($request->ajax())
		{
		$output="<h4>Search Result</h4><hr />";

		$products=DB::table('food_distributes')
		->where('cdate', $request->search)->get();
		
		if($products)
			{
					$output .="<table class='table table-striped'>";	
					$output .="<th>Client Id</th>";
					$output .="<th>Room No</th>";
					$output .="<th>Date</th>";
					

				foreach ($products as $key => $product) {
					$output.='<tr>'.
					'<td>'.$product->client_id.'</td>'.
					'<td>'.$product->room_no.'</td>'.
					'<td>'.$product->cdate.'</td></tr>';
						}
					print $output .="</table><hr />";
					//return Response($output);
			}
		}	
  
}
//food end

//booking start			
	public function adminbooking()
    {

 		$book = \App\hm_front_booking::where('status' , '=', 1)->get();			
					
		//$book=\App\hm_front_booking::all();
		$paid=\App\payment::paginate(4);
		$room_info=\App\room_info::paginate(4);
        $booking=\App\hm_front_booking::all();
		$room = DB::table('room_infos')->where('room_status', 'BL')->get();
				
		//pagination start
		//$payments = DB::table('payments')->paginate(15);
		//pagination end
        return view('admin.book',compact(['book','paid','payments','room_info','room']));		
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
        
        return redirect('/adminbooking')->with('success', 'Information has been added');		

    }
	
    public function edit_book($id)
    {
		
 		$passport = \App\booking::find($id);
		
        return view('admin.edit_book',compact('passport','id'));		
    }

    public function update_book(Request $request, $id)
    {
        $passport= \App\booking::find($id);
        $passport->client_id=$request->get('client_id');
        $passport->room_num=$request->get('room_num');
        $passport->room_type=$request->get('room_type');

        $passport->check_in=$request->get('check_in');
        $passport->check_out=$request->get('check_out');
		$passport->status=1;
        $passport->save();

        return redirect('/adminbooking');
		
    }
		
public function destroy_book($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\hm_front_booking::find($id);
        $passport->delete();
        return redirect('/adminbooking')->with('success','Information has been  deleted');
    }	
	

//goods		
	public function goods()
    {
        //
		$hm_cleaning_supp=\App\hm_cleaning_supp::paginate(3);
		$hm_item_distribute=\App\hm_item_distribute::paginate(3);
		


//start journey
$res = DB::table('hm_cleaning_supps')
            ->select('item_name')
            ->distinct()
            ->get();
$option="";
$option .="
   <table class='table table-striped'>
    <thead>
      <tr>
        <th>Item Name </th>
        <th>Total</th>
		<th>Receive</th>
		<th>Distribute</th>
		<th>Waste</th>
		<th>Total in Store</th>        
      </tr>
";
foreach ($res as $key => $cres) {
	
	$balance = DB::table('hm_cleaning_supps')->
	where('item_name', '=', $cres->item_name)->
	sum('num_of_item');
	
	$receive = DB::table('hm_item_distributes')->
	where('status', '=', 'Receive')->
	where('item_name', '=', $cres->item_name)->
	sum('quantity');
	
	$distribution = DB::table('hm_item_distributes')->
	where('status', '=', 'Distribution')->
	where('item_name', '=', $cres->item_name)->
	sum('quantity');
	
	$waste = DB::table('hm_item_distributes')->
	where('status', '=', 'Waste')->
	where('item_name', '=', $cres->item_name)->
	sum('quantity');
		
	$totalgoods = 
	$balance + ($receive-($distribution+$waste));
	$option.="<tr><td>$cres->item_name</td><td>$balance</td><td>$receive</td><td>$distribution</td><td>$waste</td><td>$totalgoods</td></tr>";
	/*
	$data = array(
		'item_name'=>$cres->item_name,
		'balance'=>$balance,
		'receive'=>$receive,
		'distribution'=>$distribution,
		'waste'=>$waste,
		'totalgoods'=>$totalgoods,
		
	);
	*/
	//print $cres->item_name." ".$balance." ".$receive." ".$distribution." ".$waste." ".$totalgoods." "."<br />";	
	//print_r($data);		
}
$option.="</table>";
//end journey

        return view('admin.goods',compact('hm_cleaning_supp','hm_item_distribute','option'));		
    }
	
	public function goods_create()
    {
		
        return view('admin.goods_create');		
    }
	public function gdstore(Request $request)
    {
        $passport= new \App\hm_cleaning_supp;
		$goods_image = $request->file('goods_image');
		
		$input['imagename'] = time().'.'.$goods_image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$goods_image->move($destinationPath, $input['imagename']);
		
		
        $passport->item_name=$request->get('item_name');
		$passport->descripation=$request->get('descripation');
        $passport->num_of_item=$request->get('num_of_item');
        $passport->receive_date=$request->get('receive_date');
		$passport->goods_image=$input['imagename'];
        

        $passport->uses_item=0;
        $passport->stock_item=0;
        $passport->item_washing_date="";
		
		
		$passport->status=1;
        $passport->save();
        
        return redirect('/goods')->with('success', 'Information has been added');		

    }
	public function view_goods($id)
    {
 		$passport = \App\hm_cleaning_supp::find($id);
		
        return view('admin.view_goods',compact('passport','id'));		
    }	
	//========good edit start======>
	
	public function edit_goods($id)
    {
		
 		$passport = \App\hm_cleaning_supp::find($id);
		
        return view('admin.edit_goods',compact('passport','id'));		
    }

    public function update_goods(Request $request, $id)
    { 
        $passport= \App\hm_cleaning_supp::find($id);		
		$image = $request->file('goods_image');
				$input['imagename'] = time().'.'.$image->getClientOriginalExtension();		
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);	
		
		       $passport->item_name=$request->get('item_name');
		       $passport->descripation=$request->get('descripation');
               $passport->num_of_item=$request->get('num_of_item');
               $passport->receive_date=$request->get('receive_date');		
		       $passport->goods_image=$input['imagename'];	
			   $passport->status=1;
               $passport->save();

        return redirect('/goods');
    }
	//start edit and delete	
public function destroy_goods($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\hm_cleaning_supp::find($id);
        $passport->delete();
        return redirect('/goods')->with('success','Information has been  deleted');
    }
		
	
	// goods edit end=====
	
	//Goods search start===============================
	
	//Goods search start===============================
		public function search_goods(Request $request)
		{
			
			if($request->ajax())
				{
	
				$output="<h4>Search Result</h4><hr />";

				$products=DB::table('hm_cleaning_supps')
                ->where('item_name', $request->search)->get();
				
//$products=DB::table('payments')->where('client_id','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

				if($products)
					{
						
					$output .="<table class='table table-striped'>";	
					$output .="<th>Item Name</th>";
					$output .="<th>Descripation</th>";
					$output .="<th>Num Of Item</th>";
					$output .="<th>Receive Date</th>";
					$output .="<th>Image</th>";
					

				foreach ($products as $key => $product) {
					$output.='<tr>'.
					'<td>'.$product->item_name.'</td>'.
					'<td>'.$product->descripation.'</td>'.
					'<td>'.$product->num_of_item.'</td>'.
					'<td>'.$product->receive_date.'</td>'.
					'<td>'.$product->goods_image.'</td>'.
					
					'</tr>';
						}
					$output .="</table><hr />";
					return Response($output);
		   }
		 }		

	}
	
//goods search end

	// goods  end=====
	
	//search total cost start===============================
		public function search_total(Request $request)
		{
			
			if($request->ajax())
				{
				$output="<h4>Search Result</h4><hr />";

				$products=DB::table('room_infos')
                ->where('room_no', $request->search)->get();
				if($products)
					{
						foreach ($products as $key => $product) 
						{
							$output=$product->condition;
						}
					return Response($output);
		   			}
		 		}		
		}
	
	
	//search total cost end	
//employee start				
	public function employee()
    {
		$emp=\App\emp::paginate(3);
;
        return view('admin.employee',compact('emp'));
    }
	public function employee_create()
    {
        return view('admin.employee_create');		
    }
	//
	
	
	
	
	public function empstore(Request $request)
    {
        //
		

        $passport= new \App\emp;
		$image = $request->file('image');		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();		
		$destinationPath = public_path('/img');		
    	$image->move($destinationPath, $input['imagename']);		
		
       
	    $passport->name=$request->get('name');
        $passport->designation=$request->get('designation');
        $passport->date_of_birth=$request->get('date_of_birth');

        $passport->address=$request->get('address');
        $passport->contrct_no=$request->get('contrct_no');
        $passport->email=$request->get('email');
		$passport->salary=$request->get('salary');
		
        $passport->gender=$request->get('gender');
        $passport->marital_status=$request->get('marital_status');
        $passport->joining_date=$request->get('joining_date');		
		$passport->schedule=$request->get('schedule');
		
       $passport->bank_account_details=$request->get('bank_account_details');
        $passport->image=$input['imagename'];
        
		$passport->status=1;
        $passport->save();
        
        return redirect('/employee')->with('success', 'Information has been added');		

    }
	public function destroy_employee($id)
    {
        $passport = \App\emp::find($id);
        $passport->delete();
        return redirect('/employee')->with('success','Information has been  deleted');
    }
	 public function edit_employee($id)
    {
		
 		$passport = \App\emp::find($id);
		
        return view('admin.edit_employee',compact('passport','id'));		
    }
	
	public function update_employee(Request $request, $id)
    {
        $passport= \App\emp::find($id);
		$image = $request->file('image');		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();		
		$destinationPath = public_path('/img');		
    	$image->move($destinationPath, $input['imagename']);		
		
       		
		
		
		
        $passport->name=$request->get('name');
        $passport->designation=$request->get('designation');
        $passport->date_of_birth=$request->get('date_of_birth');

        $passport->address=$request->get('address');
        $passport->contrct_no=$request->get('contrct_no');
		$passport->email=$request->get('email');
        $passport->joining_date=$request->get('joining_date');	
		$passport->bank_account_details=$request->get('bank_account_details');
		$passport->salary=$request->get('salary');
		$passport->schedule=$request->get('schedule');
		$passport->image=$input['imagename'];
		$passport->status=1;
        $passport->save();

        return redirect('/employee');
    }	
//employee end	
//front start

   
    public function front()
    {
        //
        $slide=\App\slide::all();
        $offer=\App\hm_offer::all();
        $about=\App\hm_about::all();
		$gallery=\App\hm_gallery::all();
        return view('admin.front',compact('slide','offer','about','gallery'));     
        
    }
    public function front_create()
    {
        //
        return view('admin.front_create');      

    }
    public function edit_front($id)
    {
        $passport = \App\slide::find($id);
        
        return view('admin.edit_front',compact('passport','id'));        
    } 
    
    public function update_front(Request $request, $id)
    {
        $passport= \App\slide::find($id);
		$image = $request->file('image1');
		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);
		
		$image2 = $request->file('image2');
		$time2 = time()+1;
		$input['imagename2'] = $time2.'.'.$image2->getClientOriginalExtension();
		
		$destinationPath2 = public_path('/img');
$image2->move($destinationPath2, $input['imagename2']);
		

		$image3 = $request->file('image3');
		$time3 = time()+2;
		$input['imagename3'] = $time3.'.'.$image3->getClientOriginalExtension();
		
		$destinationPath3 = public_path('/img');
$image3->move($destinationPath3, $input['imagename3']);

							
        $passport->title1=$request->get('title1');
        $passport->title2=$request->get('title2');
        $passport->title3=$request->get('title3');
        $passport->image1=$input['imagename'];
        $passport->image2=$input['imagename2'];
        $passport->image3=$input['imagename3'];
        $passport->status=1;
        $passport->save();

        return redirect('/front');
    }      
    public function frnstore(Request $request)
    {
        //
        
        $passport= new \App\slide;

        $passport->title1=$request->get('title1');
        $passport->title2=$request->get('title2');
        $passport->title3=$request->get('title3');

        $passport->image1=$request->get('image1');
        $passport->image2=$request->get('image2');
        $passport->image3=$request->get('image3');

        $passport->status=1;
        $passport->save();
        
        return redirect('/front')->with('success', 'Information has been added');        

    }  
    public function destroy_front($id)
    {
        $passport = \App\slide::find($id);
        $passport->delete();
        return redirect('/front')->with('success','Information has been  deleted');
    }

    
//front end


//laundry start
	public function laundry()
    {
        //
		$hm_laundry=\App\hm_laundry::paginate(3);

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
        
        return redirect('/laundry')->with('success', 'Information has been added');		

    }
	
	public function destroy_laundry($id)
    {
        $passport = \App\hm_laundry::find($id);
        $passport->delete();
        return redirect('laundry')->with('success','Information has been  deleted');
    }
	
	 public function edit_laundry($id)
    {
		
 		$passport = \App\hm_laundry::find($id);
		
        return view('admin.laundry_edit',compact('passport','id'));		
    }
	
	public function update_laundry(Request $request, $id)
    {
        $passport= \App\hm_laundry::find($id);
        $passport->order_date=$request->get('order_date');
        $passport->delivery_date=$request->get('delivery_date');
        $passport->number_of_cloth=$request->get('number_of_cloth');

        $passport->service_charge=$request->get('service_charge');
        $passport->type_of_washing=$request->get('type_of_washing');
		$passport->cloth_type=$request->get('cloth_type');
        $passport->comment=$request->get('comment');
		$passport->status=1;
        $passport->save();

        return redirect('/laundry');
    }	
public function laundry_invoice($id){
		$products=DB::table('hm_laundries')->
		where('id',$id)->get();
        return view('admin.laundry_invoice',compact('products'));	
}
public function search_odr(Request $request){
	
	if($request->ajax())
		{
		$output="<h4>Search Result</h4><hr />";

		$products=DB::table('hm_laundries')
		->where('order_date', $request->search)->get();
		
		if($products)
			{
					$output .="<table class='table table-striped'>";	
					$output .="<th>Client Id</th>";
					$output .="<th>Order Date</th>";
					$output .="<th>Delivery Date</th>";
					$output .="<th>Quantity</th>";
					$output .="<th>Type</th>";
					$output .="<th>Charge</th>";
					

				foreach ($products as $key => $product) {
					$output.='<tr>'.
					'<td>'.$product->client_id.'</td>'.
					'<td>'.$product->order_date.'</td>'.
					'<td>'.$product->delivery_date.'</td>'.
					'<td>'.$product->number_of_cloth.'</td>'.
					'<td>'.$product->type_of_washing.'</td>'.
					'<td>'.$product->service_charge.'</td>'.
					
					'</tr>';
						}
					$output .="</table><hr />";
					return Response($output);
			}
		}
}
	
public function search_dlv(Request $request){
	
	if($request->ajax())
		{
		$output="<h4>Search Result</h4><hr />";

		$products=DB::table('hm_laundries')
		->where('delivery_date', $request->search)->get();
		
		if($products)
			{
					$output .="<table class='table table-striped'>";	
					$output .="<th>Client Id</th>";
					$output .="<th>Order Date</th>";
					$output .="<th>Delivery Date</th>";
					$output .="<th>Quantity</th>";
					$output .="<th>Type</th>";
					$output .="<th>Charge</th>";
					

				foreach ($products as $key => $product) {
					$output.='<tr>'.
					'<td>'.$product->client_id.'</td>'.
					'<td>'.$product->order_date.'</td>'.
					'<td>'.$product->delivery_date.'</td>'.
					'<td>'.$product->number_of_cloth.'</td>'.
					'<td>'.$product->type_of_washing.'</td>'.
					'<td>'.$product->service_charge.'</td>'.
					
					'</tr>';
						}
					$output .="</table><hr />";
					return Response($output);
			}
		}	
  
	
}
//laundry end			
     //enquiry start==================
   
    public function enquiry ()
    {
        //
		$enq=\App\enq::paginate(3);
        return view('admin.enquiry ',compact('enq'));
    }
	
	public function enquiry_create()
    {
        return view('admin.enquiry_create');		
    }
	
    public function edit_enquiry($id)
    {
 		$passport = \App\enq::find($id);
		
        return view('admin.edit_enquiry',compact('passport','id'));		
    }	

	
    public function update_enquiry(Request $request, $id)
    {
        $passport= \App\enq::find($id);
        $passport->name=$request->get('name');
        $passport->phone=$request->get('phone');
        $passport->email=$request->get('email');
	  $passport->message=$request->get('message');

		$passport->status=1;
        $passport->save();

        return redirect('/enquiry');
    }		
	public function enstore(Request $request)
    {
        //
         $passport= new\App\enq;
        $passport->name=$request->get('name');
        $passport->phone=$request->get('phone');
        $passport->email=$request->get('email');
	  $passport->message=$request->get('message');


		$passport->status=1;
        $passport->save();
        
        return redirect('/enquiry')->with('success', 'Information has been added');		

    }


public function destroy_enquiry($id)
    {
        $passport = \App\enq::find($id);
        $passport->delete();
        return redirect('/enquiry')->with('success','Information has been  deleted');
    }
 public function view_enquiry($id)
    {
 		$passport = \App\enq::find($id);
		
        return view('admin.view_enquiry',compact('passport','id'));		
    }   
    //enquiry end=========================== 
// transport start	
	public function transport()
    {
        
		$transport=\App\transport::paginate(3);
		$hm_transport_hire=\App\hm_transport_hire::paginate(3);

        return view('admin.transport',compact('transport','hm_transport_hire'));		


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
		//upload image create start
		$image = $request->file('image');
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
		
		//upload end
        $passport->transport_id=$request->get('transport_id');
        $passport->type_of_transport=$request->get('type_of_transport');
		$passport->image=$input['imagename'];
        $passport->description=$request->get('description');
        
		$passport->status=1;
        $passport->save();
        
        return redirect('/transport')->with('success', 'Information has been added');		

    }
	
public function view_transport($id)
    {
 		$passport = \App\transport::find($id);
		
        return view('admin.view_transport',compact('passport','id'));		
    }	
	
public function edit_transport($id)
    {
 		$passport = \App\transport::find($id);
		
        return view('admin.edit_transport',compact('passport','id'));		
    }
	
		

	
    public function update_transport(Request $request, $id)
    {
        $passport= \App\transport::find($id);
		
		//upload image update start
		$image = $request->file('image');
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
		
		//update end
        $passport->transport_id=$request->get('transport_id');
        $passport->type_of_transport=$request->get('type_of_transport');
		$passport->image=$input['imagename'];
        $passport->description=$request->get('description');
        
        
		$passport->status=1;
        $passport->save();

        return redirect('/transport');
    }
	
	public function destroy_transport($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\transport::find($id);
        $passport->delete();
        return redirect('/transport')->with('success','Information has been  deleted');
    }		
// transport end

            // accounts start 

	public function account()
    {		
	    $account=\App\accounts::paginate(5);
		
		$expenses = DB::table('accounts')->
		where('expenses', '=', 'Expense')->
		sum('amount');

		$revenue = DB::table('accounts')->
		where('expenses', '=', 'Revenue')->
		sum('amount');
						
        return view('admin.accounts',compact('account','expenses','revenue'));		
    }
	public function account_print()
    {		
	    $account=\App\accounts::all();
		
		$expenses = DB::table('accounts')->
		where('expenses', '=', 'Expense')->
		sum('amount');

		$revenue = DB::table('accounts')->
		where('expenses', '=', 'Revenue')->
		sum('amount');
						
        return view('admin.account_print',compact('account','expenses','revenue'));		
    }	
	//create account
	
	public function account_create()
    {
		return view('admin.account_create');		
    }
	
	public function accstore(Request $request)
     {
		 
        $passport= new \App\accounts;
        $passport->expenses=$request->get('expenses');
        $passport->revenue=0;
		$passport->description=$request->get('description');
        $passport->amount=$request->get('amount');
		$passport->date1=$request->get('date');
		$passport->status=1;
        $passport->save();
        return redirect('accounts')->with('success', 'Information has been added');	
			
    }
	
	// view account
public function view_account($id)
    {
 		$passport = \App\accounts::find($id);
        return view('admin.view_account',compact('passport','id'));		
    }	
	
	
	//edit update account
public function edit_account($id)
    {
 		$passport = \App\accounts::find($id);
        return view('admin.edit_account',compact('passport','id'));		
    }

    public function update_account(Request $request, $id)
     {
        $passport= \App\accounts::find($id);
        $passport->expenses=$request->get('expenses');
        $passport->revenue=0;
        $passport->description=$request->get('description');
		$passport->amount=$request->get('amount');
        $passport->date1=$request->get('date');
		$passport->status=1;
        $passport->save();
        return redirect('accounts');
    }
	
	  //delete account
	  
	public function destroy_account($id)
    {
        $passport = \App\accounts::find($id);
        $passport->delete();
        return redirect('accounts')->with('success','Information has been  deleted');
    }
	
//accounts end
//client start
	public function client()
    {
		$guest=\App\guest::paginate(5);
		

				
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
		$client_image = $request->file('client_image');
		
		$input['imagename'] = time().'.'.$client_image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$client_image->move($destinationPath, $input['imagename']);		
        $passport->name=$request->get('name');
        $passport->address=$request->get('address');
        $passport->contact=$request->get('contact');

        $passport->national_id=$request->get('national_id');
        $passport->passport=$request->get('passport');
        $passport->client_image=$input['imagename'];
		
		//$passport->status=1;
        $passport->save();
        
		//$passport1= new \App\hm_front_booking;

 		$passport1 = \App\hm_front_booking::where('contact_no' , '=', $request->get('contact'))
		->first();
		if ($passport1 === null) {
   			
		}
		else {
		$contact = $request->get('contact');
		$status = 0;
		//$passport2= \App\hm_front_booking::find($contact);
        $passport1->status=$status;
		
        $passport1->save();			
			 	
		}
				
        return redirect('/client')->with('success', 'Information has been added');		

    }
	
    public function edit_client($id)
    {
 		$passport = \App\guest::find($id);
		
        return view('admin.edit_client',compact('passport','id'));		
    }
    public function update_client(Request $request, $id)
    {
        $passport= \App\guest::find($id);
		$client_image = $request->file('client_image');
		
		$input['imagename'] = time().'.'.$client_image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$client_image->move($destinationPath, $input['imagename']);		
        $passport->name=$request->get('name');
        $passport->address=$request->get('address');
        $passport->contact=$request->get('contact');

        $passport->national_id=$request->get('national_id');
        $passport->passport=$request->get('passport');
        $passport->client_image=$input['imagename'];
		
        $passport->save();

        return redirect('/client');
    }		
public function destroy_client($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\guest::find($id);
        $passport->delete();
        return redirect('/client')->with('success','Information has been  deleted');
    }
	
	
public function paystore(Request $request){
	
	        //
			
        $passport= new \App\payment;
        $passport->client_id=$request->get('client_id');
        $passport->client_status=$request->get('client_status');
        $passport->client_date=$request->get('client_date');
        $passport->room_no=$request->get('room_no');
		
		$passport->checkout_date=$request->get('checkout_date');
        $passport->client_total=$request->get('client_total');
        $passport->client_pay=$request->get('client_pay');
        $passport->client_due=$request->get('client_due');
       
		
		//$passport->status=1;
        $passport->save();
        
        return redirect('/adminbooking')->with('success', 'Information has been added');
}


	//distrbution start ============
	public function dis()
    {
        //
		$hm_item_distribute=\App\hm_item_distribute::all();

        return view('admin.dis',compact('hm_item_distribute'));		
    }
	
	public function dis_create()
    {
				$dis = DB::table('hm_cleaning_supps')->where('status','1' )->get();
               return view('admin.dis_create',compact('dis'));		
    }
	public function disstore(Request $request)
    {
				$passport= new \App\hm_item_distribute;
				$passport->item_name=$request->get('item_name');
				$passport->date_dis=$request->get('date_dis');
				$passport->quantity=$request->get('quantity');
				$passport->status=$request->get('status');
				$passport->where=$request->get('where');
				$passport->descripation=$request->get('descripation');					
				$passport->save();        
              return redirect('goods')->with('success', 'Information has been added');		

    }
	//========dis view,edit and delete start======>
	public function view_dis($id)
    {
 		$passport = \App\hm_item_distribute::find($id);		
        return view('admin.view_dis',compact('passport','id'));		
    }	
	
	public function edit_dis($id)
    {
		
 		$passport = \App\hm_item_distribute::find($id);
		$dis = DB::table('hm_cleaning_supps')->where('status','1' )->get();
		
        return view('admin.edit_dis',compact('passport','id','dis'));		
    }

    public function update_dis(Request $request, $id)
    {
				$passport= \App\hm_item_distribute::find($id);
				$passport->item_name=$request->get('item_name');
				$passport->date_dis=$request->get('date_dis');
				$passport->quantity=$request->get('quantity');
				$passport->status=$request->get('status');
				$passport->where=$request->get('where');
				$passport->descripation=$request->get('descripation');			
				$passport->save();
               return redirect('/goods');
    }
	
	
	
	
	//start edit and delete	
		public function destroy_dis($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();				
				$passport = \App\hm_item_distribute::find($id);
				$passport->delete();
				return redirect('goods')->with('success','Information has been  deleted');
    }	
	
	// distribution  edit end=====
//search start
public function search(Request $request)
{
	//return "hi";
//return $request->search;

if($request->ajax())
{
	
$output="<h4>Search Result</h4><hr />";

$products=DB::table('payments')
                ->where('client_id', $request->search)->get();
				
	

//$products=DB::table('payments')->where('client_id','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

if($products)
{
$output .="<div align='center'><a href='/view_invoice/".$request->search."' class='btn btn-warning'>Guest Invoice</a></div><br />";	
$output .="<table class='table table-striped'>";	
$output .="<th>Client Id</th>";
$output .="<th>Room No</th>";
$output .="<th>Check In</th>";
$output .="<th>Check Out</th>";
$output .="<th>Pay Date</th>";

$output .="<th>Total</th>";
$output .="<th>Pay</th>";
$output .="<th>Due</th>";	
$output .="<th></th>";	

foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->client_id.'</td>'.
'<td>'.$product->room_no.'</td>'.
'<td>'.$product->client_date.'</td>'.
'<td>'.$product->checkout_date.'</td>'.
'<td>'.$product->created_at.'</td>'.
'<td>'.$product->client_total.'</td>'.
'<td>'.$product->client_pay.'</td>'.
'<td>'.$product->client_due.'</td>'.

'</tr>';
}
$output .="</table><hr />";
return Response($output);
   }
   }
	}

//check in search
public function search_cindate(Request $request)
{
	//return "hi";
//return $request->search;

if($request->ajax())
{
	
$output="<h4>Search Result</h4><hr />";

$products=DB::table('payments')->where('client_date','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

if($products)
{
$output .="<table class='table table-striped'>";	
$output .="<th>Client Id</th>";
$output .="<th>Status</th>";
$output .="<th>Check In</th>";
$output .="<th>Check Out</th>";
$output .="<th>Total</th>";
$output .="<th>Pay</th>";
$output .="<th>Due</th>";	

foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->client_id.'</td>'.
'<td>'.$product->client_status.'</td>'.
'<td>'.$product->client_date.'</td>'.
'<td>'.$product->checkout_date.'</td>'.
'<td>'.$product->client_total.'</td>'.
'<td>'.$product->client_pay.'</td>'.
'<td>'.$product->client_due.'</td>'.

'</tr>';
}
$output .="</table><hr />";
return Response($output);
   }
   }
	}
//check in search end

//check in search
public function search_con(Request $request)
{
	//return "hi";
//return $request->search;

if($request->ajax())
{
	
$output="<h4>Search Result</h4><hr />";

$product = DB::table('hm_front_bookings')->where('contact_no', $request->search)->first();

//$products=DB::table('hm_front_bookings')->where('contact_no','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

if($product)
{
$output .="<table class='table table-striped'>";	
$output .="<th>Name</th>";
$output .="<th>Address</th>";
$output .="<th>Contact No</th>";
$output .="<th>Check In</th>";
$output .="<th>Check Out</th>";
$output .="<th>Bed Type</th>";
$output .="<th>Room Con</th>";	

//foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->name.'</td>'.
'<td>'.$product->address.'</td>'.
'<td>'.$product->contact_no.'</td>'.
'<td>'.$product->check_in.'</td>'.
'<td>'.$product->check_out.'</td>'.
'<td>'.$product->bed_type.'</td>'.
'<td>'.$product->room_con.'</td>'.

'</tr>';
//}
$output .="</table><hr />";
return Response($output);
   }
   }
	}		

	
//Search by Due	
public function search_due(Request $request)
	{
		if($request->ajax())
			{
	
//$output="<h4>Search Result</h4><hr />";
				if($request->search=='due')
				
					{
						for($i=1;$i<=100;$i++)
							{
								$balance = DB::table('payments')->
								where('client_id', '=', $i)->
								sum('client_pay');
			
								$ctotals = DB::table('payments')
								->select('client_total')
								->distinct()
								->where('client_id', '=', $i)->get();
			
								foreach ($ctotals as $key => $ctotal) 
								{
									$ctot = $ctotal->client_total;
								}
								$due = $ctot-$balance;
								if($ctot>$balance)
								{
									$output="";
						
									$products=DB::table('payments')
									->select('client_id')
									->distinct()
									->where('client_id', '=', $i)
									->get()
									;
									if($products->isEmpty())
									{
									}
								else 
								{
									$output .="<table class='table table-striped'>";
									$output .="<tr>";	
									$output .="<th>Client Id</th>";
									$output .="<th>Total</th>";
									$output .="<th>Pay</th>";
									$output .="<th>Due</th>";
									$output .="</tr>";	
					
									foreach ($products as $key => $product) 
									{
										$output .="<tr>"; 
										$output .="<td>".$product->client_id."<td>";	
										$output .="<td>".$ctot."<td>";	
										$output .="<td>".$balance."<td>";	
										$output .="<td>".$due."<td>";	
										$output .="</tr>";	
									}
								}
								$output .="</table>";
								print $output;	
							}
			
			
						}//for
					}//due

//paid start
				if($request->search=='paid')
				
					{
						for($i=1;$i<=100;$i++)
							{
								$balance = DB::table('payments')->
								where('client_id', '=', $i)->
								sum('client_pay');
			
								$ctotals = DB::table('payments')
								->select('client_total')
								->distinct()
								->where('client_id', '=', $i)->get();
			
								foreach ($ctotals as $key => $ctotal) 
								{
									$ctot = $ctotal->client_total;
								}
								$due = $ctot-$balance;
								if($ctot==$balance)
								{
									$output="";
						
									$products=DB::table('payments')
									->select('client_id')
									->distinct()
									->where('client_id', '=', $i)
									->get()
									;
									if($products->isEmpty())
									{
									}
								else 
								{
									$output .="<table class='table table-striped'>";
									$output .="<tr>";	
									$output .="<th>Client Id</th>";
									$output .="<th>Total</th>";
									$output .="<th>Pay</th>";
									$output .="<th>Due</th>";
									$output .="</tr>";	
					
									foreach ($products as $key => $product) 
									{
										$output .="<tr>"; 
										$output .="<td>".$product->client_id."<td>";	
										$output .="<td>".$ctot."<td>";	
										$output .="<td>".$balance."<td>";	
										$output .="<td>".$due."<td>";	
										$output .="</tr>";	
									}
								}
								$output .="</table>";
								print $output;	
							}
			
			
						}//for
					}//due
		
			}//ajax
	}//function end
	
//check out search
public function search_outdate(Request $request)
{
	//return "hi";
//return $request->search;

if($request->ajax())
{
	
$output="<h4>Search Result</h4><hr />";

$products=DB::table('payments')->where('checkout_date','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

if($products)
{
$output .="<table class='table table-striped'>";	
$output .="<th>Client Id</th>";
$output .="<th>Status</th>";
$output .="<th>Check In</th>";
$output .="<th>Check Out</th>";
$output .="<th>Total</th>";
$output .="<th>Pay</th>";
$output .="<th>Due</th>";	

foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->client_id.'</td>'.
'<td>'.$product->client_status.'</td>'.
'<td>'.$product->client_date.'</td>'.
'<td>'.$product->checkout_date.'</td>'.
'<td>'.$product->client_total.'</td>'.
'<td>'.$product->client_pay.'</td>'.
'<td>'.$product->client_due.'</td>'.

'</tr>';
}
$output .="</table><hr />";
return Response($output);
   }
   }
	}
//food item1 cost search								
public function search_food1(Request $request){
	$output = '';	
	$products=DB::table('hm_food_items')->where('food_name','LIKE','%'.$request->search."%")->get();
	foreach ($products as $key => $product) {
		$output = $product->price;
		
	}
	return $output;
	
}
//========================offer start===============================>
   
    public function offer()
    {
        //
        $offer=\App\hm_offer::all();

        return view('admin.offer',compact('offer'));        
        
    }
    public function offer_create()
    {
        //
        return view('admin.offer_create');      

    }
    public function edit_offer($id)
    {
        $passport = \App\hm_offer::find($id);
        
        return view('admin.edit_offer',compact('passport','id'));        
    } 
    
	//image upload start================>
	
    public function update_offer(Request $request, $id)
    {
        $passport= \App\hm_offer::find($id);
		$image = $request->file('image1');
		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);
		
		$image2 = $request->file('image2');
		$time2 = time()+1;
		$input['imagename2'] = $time2.'.'.$image2->getClientOriginalExtension();
		
		$destinationPath2 = public_path('/img');
$image2->move($destinationPath2, $input['imagename2']);
		

		$image3 = $request->file('image3');
		$time3 = time()+2;
		$input['imagename3'] = $time3.'.'.$image3->getClientOriginalExtension();
		
		$destinationPath3 = public_path('/img');
$image3->move($destinationPath3, $input['imagename3']);

							
        $passport->title1=$request->get('title1');
        $passport->title2=$request->get('title2');
        $passport->title3=$request->get('title3');
		
		$passport->descripation1=$request->get('descripation1');
        $passport->descripation2=$request->get('descripation2');
        $passport->descripation3=$request->get('descripation3');
		
		
        $passport->image1=$input['imagename'];
        $passport->image2=$input['imagename2'];
        $passport->image3=$input['imagename3'];
        $passport->status=1;
        $passport->save();

        return redirect('/offer');
    }
	     
    public function offerstore(Request $request)
    {
        $passport= new \App\hm_offer;

        $passport->title1=$request->get('title1');
        $passport->title2=$request->get('title2');
        $passport->title3=$request->get('title3');
       
	    $passport->descripation1=$request->get('descripation1');
        $passport->descripation2=$request->get('descripation2');
        $passport->descripation3=$request->get('descripation3');


        $passport->image1=$request->get('image1');
        $passport->image2=$request->get('image2');
        $passport->image3=$request->get('image3');

        $passport->status=1;
        $passport->save();
        
        return redirect('/offer')->with('success', 'Information has been added');        

    }  
    public function destroy_offer($id)
    {
        $passport = \App\hm_offer::find($id);
        $passport->delete();
        return redirect('/offer')->with('success','Information has been  deleted');
    }

//offer end========================================================>
//======room start===========================
public function room_info()
    {
        //
        $k=\App\room_info::all();
        return view('admin.room_info',compact('k'));
    }
    public function room_info_create()
    {
        //
        return view('admin.room_info_create');      

    }
    public function roomstore(Request $request)
    {
        //
        
        $passport= new \App\room_info;

        $passport->room_no=$request->get('room_no');
        $passport->condition=$request->get('condition');
        $passport->room_status="BL";
        $passport->save();
        
        return redirect('/adminbooking')->with('success', 'Information has been added');        

    } 

	public function destroy_room($id){
        $passport = \App\room_info::find($id);
        $passport->delete();
        return redirect('/adminbooking')->with('success','Information has been  deleted');		
		
	}
	
public function edit_room($id){
	
        $passport = \App\room_info::find($id);
        
        return view('admin.edit_room',compact('passport','id'));	
}
public function room_update(Request $request, $id){
        $passport= \App\room_info::find($id);
		
        $passport->room_no=$request->get('room_no');
        $passport->condition=$request->get('condition');

		
        $passport->save();

        return redirect('/adminbooking');	
	
}
//======room end==============================  

	// about us start==============================
	 public function about()
    {
        //
        $about=\App\hm_about::all();
        return view('admin.front',compact('front'));        
        
    }
	
	
   
    public function edit_about($id)
    {
        $passport = \App\hm_about::find($id);
        
        return view('admin.edit_about',compact('passport','id'));        
    } 
    
	//image upload start================>
	
    public function update_about(Request $request, $id)
    {
        $passport= \App\hm_about::find($id);
		$image = $request->file('image1');
		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);
		
		$image2 = $request->file('image2');
		$time2 = time()+1;
		$input['imagename2'] = $time2.'.'.$image2->getClientOriginalExtension();
		
		$destinationPath2 = public_path('/img');
$image2->move($destinationPath2, $input['imagename2']);
		

		$image3 = $request->file('image3');
		$time3 = time()+2;
		$input['imagename3'] = $time3.'.'.$image3->getClientOriginalExtension();
		
		$destinationPath3 = public_path('/img');
$image3->move($destinationPath3, $input['imagename3']);

							
      
        $passport->title=$request->get('title');
		
		$passport->descripation1=$request->get('descripation1');
        $passport->descripation2=$request->get('descripation2');
       
		
		
        $passport->image1=$input['imagename'];
        $passport->image2=$input['imagename2'];
        $passport->image3=$input['imagename3'];
        $passport->status=1;
        $passport->save();

        return redirect('/front');
    }
	
	//about us end=========================	
	
	
	// Gallery start==============================
	 public function gallery()
    {
        //
        $gallery=\App\hm_gallery::all();
        return view('admin.front',compact('front'));        
        
    }
	
	
   
    public function edit_gallery($id)
    {
        $passport = \App\hm_gallery::find($id);
        
        return view('admin.edit_gallery',compact('passport','id'));        
    } 
    
	//image upload start================>
	
    public function update_gallery(Request $request, $id)
    {
        $passport= \App\hm_gallery::find($id);
		$image = $request->file('image1');
		
		$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
		
		$destinationPath = public_path('/img');
    	$image->move($destinationPath, $input['imagename']);
    	//$this->postImage->add($input);
		
		$image2 = $request->file('image2');
		$time2 = time()+1;
		$input['imagename2'] = $time2.'.'.$image2->getClientOriginalExtension();
		
		$destinationPath2 = public_path('/img');
$image2->move($destinationPath2, $input['imagename2']);
		

		$image3 = $request->file('image3');
		$time3 = time()+2;
		$input['imagename3'] = $time3.'.'.$image3->getClientOriginalExtension();
		
		$destinationPath3 = public_path('/img');
$image3->move($destinationPath3, $input['imagename3']);

$image4 = $request->file('image4');
		$time4 = time()+3;
		$input['imagename4'] = $time4.'.'.$image4->getClientOriginalExtension();
		
		$destinationPath4 = public_path('/img');
$image4->move($destinationPath3, $input['imagename4']);


$image5 = $request->file('image5');
		$time5 = time()+4;
		$input['imagename5'] = $time5.'.'.$image5->getClientOriginalExtension();
		
		$destinationPath5 = public_path('/img');
$image5->move($destinationPath5, $input['imagename5']);


$image6 = $request->file('image6');
		$time6 = time()+5;
		$input['imagename6'] = $time6.'.'.$image6->getClientOriginalExtension();
		
		$destinationPath6 = public_path('/img');
$image6->move($destinationPath6, $input['imagename6']);


							
      
        
		
		$passport->descrip1=$request->get('descrip1');
        $passport->descrip2=$request->get('descrip2');
		$passport->descrip3=$request->get('descrip3');
        $passport->descrip4=$request->get('descrip4');
		$passport->descrip5=$request->get('descrip5');
        $passport->descrip6=$request->get('descrip6');
       
		
		
        $passport->image1=$input['imagename'];
        $passport->image2=$input['imagename2'];
        $passport->image3=$input['imagename3'];
		$passport->image4=$input['imagename4'];
        $passport->image5=$input['imagename5'];
        $passport->image6=$input['imagename6'];
        $passport->status=1;
        $passport->save();

        return redirect('/front');
    }
	
	//Gallery end=========================
	//Booking Start===========================
    public function guest_entry_create()
    {
        $booking=\App\hm_front_booking::all();
		$room = DB::table('room_infos')->where('room_status', 'BL')->get();
		
        return view('admin.guest_entry_create',compact('booking','room')); 		
        //

    }	
	public function bkkstore(Request $request){
		print "hi";
		
	}
	
	//Booking End==============================	
	//hire transport start ============
	public function hire_trans()
    {
        //
		$hm_transport_hire=\App\hm_transport_hire::all();

        return view('admin.hire_trans',compact('hm_transport_hire'));		
    }
	
	public function hire_trans_create()
    {
        $transport=\App\hm_transport_hire::all();
		$booking = DB::table('bookings')->where('status','1' )->get();
		$trans = DB::table('transports')->where('status','1')->get();
		
		
		
       return view('admin.hire_trans_create',compact('transport','booking','trans')); 		
        //

    }	
	
	
	
	
	
	//public function hire_trans_create()
	//{
	//$client= DB::table('bookings')
        //      ->get();	
			  
	//$transport= DB::table('transports')
             // ->get();	
			  		  
	
//return view('admin.hire_trans_create',compact('client','transport'));
	
       	
   // }
	
	public function hire_transstore(Request $request)
    {
        $passport= new \App\hm_transport_hire;
		
        $passport->client_id=$request->get('client_id');		
        $passport->hire_date=$request->get('hire_date');
		$passport->transport_id=$request->get('transport_id');
        $passport->location=$request->get('location');
      	$passport->cost=$request->get('cost');
		$passport->status=1;
        $passport->save();
        
        return redirect('transport')->with('success', 'Information has been added');		

    }
	//========hire transport  view,edit and delete start======>
	public function view_hire_trans($id)
    {
 		$passport = \App\hm_transport_hire::find($id);
		
        return view('admin.view_hire_trans',compact('passport','id'));		
    }	
	
	public function edit_hire_trans($id)
    {
		
 		$passport = \App\hm_transport_hire::find($id);
		$booking = DB::table('bookings')->where('status','1' )->get();
		$trans = DB::table('transports')->where('status','1' )->get();
		
        return view('admin.edit_hire_trans',compact('passport','id','booking','trans'));		
    }

    public function update_hire_trans(Request $request, $id)
    {
        $passport= \App\hm_transport_hire::find($id);
        $passport->client_id=$request->get('client_id');
        $passport->hire_date=$request->get('hire_date');
		$passport->transport_id=$request->get('transport_id');
        $passport->location=$request->get('location');
      	$passport->cost=$request->get('cost');
		
        $passport->save();

        return redirect('/transport');
    }
	
	
	
	
	//start edit and delete	
public function destroy_hire_trans($id)
    {
        //$passport = \App\hm_food_items::find($id);
        //$passport->delete();
				
        $passport = \App\hm_transport_hire::find($id);
        $passport->delete();
        return redirect('transport')->with('success','Information has been  deleted');
    }	
	//========hire transport  view,edit and delete start======>
	public function invoice_hire_trans($id){
		$products=DB::table('hm_transport_hires')->
		where('client_id',$id)->get();
		
        return view('admin.view_invoice_hire_trans',compact('products'));
	
}	
	// hire transport   end=
	
	// transport search start==================
	public function search_trans(Request $request)
{
	//return "hi";
//return $request->search;

if($request->ajax())
{
	
$output="<h4>Search Result</h4><hr />";

$products=DB::table('transports')->where('type_of_transport','LIKE','%'.$request->search."%")->get();
//$products=DB::table('payments')->where('client_id', 1)->first();
//echo $products->client_status;
//print_r($products);exit;

if($products)
{
$output .="<table class='table table-striped'>";	
$output .="<th>Transport Id</th>";
$output .="<th>Type of Transport</th>";
$output .="<th>Image</th>";
$output .="<th>Description</th>";

foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->transport_id.'</td>'.
'<td>'.$product->type_of_transport.'</td>'.
'<td>'.$product->image.'</td>'.
'<td>'.$product->description.'</td>'.

'</tr>';
}
$output .="</table><hr />";
return Response($output);
   }
   }
	}		
		// transport search end ==================
//start search based room status
public function search_rs(Request $request){
	if($request->ajax())
	{
		
		$output="<div align='left'><h4>Search Result</h4><hr />";
	
		$products=DB::table('room_infos')->where('room_status', $request->search)->get();
		if($products)
		{
			$output .="<table class='table table-striped'>";	
			$output .="<th>Room No</th>";
			$output .="<th>Condition</th>";
			$output .="<th>Status</th>";
	
			foreach ($products as $key => $product) 
			{
				$output.='<tr>'.
				'<td>'.$product->room_no.'</td>'.
				'<td>'.$product->condition.'</td>'.
				'<td>'.$product->room_status.'</td>'.
	
				'</tr>';
			}
			$output .="</table></div><hr />";
			return Response($output);
	  	 }
	   }
   }

//end search based room status 	
//start search based room condition
public function search_rc(Request $request){
	if($request->ajax())
	{
		
		$output="<div align='left'><h4>Search Result</h4><hr />";
	
		$products=DB::table('room_infos')->where('condition', $request->search)->get();
		if($products)
		{
			$output .="<table class='table table-striped'>";	
			$output .="<th>Room No</th>";
			$output .="<th>Condition</th>";
			$output .="<th>Status</th>";
	
			foreach ($products as $key => $product) 
			{
				$output.='<tr>'.
				'<td>'.$product->room_no.'</td>'.
				'<td>'.$product->condition.'</td>'.
				'<td>'.$product->room_status.'</td>'.
	
				'</tr>';
			}
			$output .="</table></div><hr />";
			return Response($output);
	  	 }
	   }
   }


//end search based room condition					
// invoice start
public function view_invoice($id){
		$products=DB::table('payments')->
		where('client_id',$id)->get();
		
        return view('admin.view_invoice',compact('products'));
	
}

// invoice end					
}//class end

