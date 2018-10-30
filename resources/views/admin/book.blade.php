@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 

<!-- Search Box Start -->
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#search_con').keyup(function(){
		$value=$(this).val();
		alert($value);
	    
		});
    
});
</script>
<script>
$(document).ready(function(){
    $('#search').keyup(function(){
		$value=$(this).val();
		
		$.ajax({
		type : 'get',
		url : '{{URL::to("search")}}',
		data:{'search':$value},
		success:function(data){
		$('#search_result').html(data);
		}
		});		    
		});
    
});
</script>

<script>
$(document).ready(function(){
    $('#search').keyup(function(){
		$value=$(this).val();
		
		$.ajax({
		type : 'get',
		url : '{{URL::to("search1")}}',
		data:{'search':$value},
		success:function(data){
		$('#search_result').html(data);
		}
		});		    
		});
    
});
</script>
<script>
$(document).ready(function(){
    $("#cindate").change(function(){
			
		$value=$(this).val();
		//alert($value);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_cindate")}}',
		data:{'search':$value},
		success:function(data){
		$('#search_result').html(data);
		}
		});					    
		});
    
});
</script>
<script>
$(document).ready(function(){
    $("#duein").change(function(){
			
		$value=$(this).val();
		//alert($value);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_due")}}',
		data:{'search':$value},
		success:function(data){
			//alert(data);
		$('#search_result').html(data);
		}
		});					    
		});
    
});
</script>
<!-- checkout javascript start===============-->
<script>
$(document).ready(function(){
    $("#coutdate").change(function(){
			
		$value=$(this).val();
		//alert($value);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_outdate")}}',
		data:{'search':$value},
		success:function(data){
		$('#search_result').html(data);
		}
		});					    
		});
    
});
</script>
<!-- checkout javascript end===============-->
<!-- calculate total COst -->
<script>
$(document).ready(function(){
    $("#room_no").change(function(){
			
		$value=$(this).val();
		$checkin=$('#client_date').val();
		$checkout=$('#checkout_date').val();
                  var startDay = new Date($('#client_date').val());
                  var endDay = new Date($('#checkout_date').val());
                  var millisecondsPerDay = 1000 * 60 * 60 * 24;

                  var millisBetween = endDay.getTime() - startDay.getTime();
                  var days = millisBetween / millisecondsPerDay;

                  // Round down.
                  var totday = Math.floor(days);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_total")}}',
		data:{'search':$value},
		success:function(data){
			if(data=='AC'){
				totcost = totday*4000;
				totdue = totcost - $('#client_pay').val();
				//$('#client_due').val(totdue);				
				$('#client_total').val(totcost);
			}
			else
			{
				totcost = totday*2000;
				totdue = totcost - $('#client_pay').val();
				//$('#client_due').val(totdue);
				 
				$('#client_total').val(totcost);
			}
		//$('#search_result').html(data);
		}
		});					    
		});
    
});
</script>
<script>
/*
$(document).ready(function(){
    $('#client_pay').blur(function(){
		$value=$("#room_no").val();
		$checkin=$('#client_date').val();
		$checkout=$('#checkout_date').val();
                  var startDay = new Date($('#client_date').val());
                  var endDay = new Date($('#checkout_date').val());
                  var millisecondsPerDay = 1000 * 60 * 60 * 24;

                  var millisBetween = endDay.getTime() - startDay.getTime();
                  var days = millisBetween / millisecondsPerDay;

                  // Round down.
                  var totday = Math.floor(days);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_total")}}',
		data:{'search':$value},
		success:function(data){
			if(data=='AC'){
				totcost = totday*4000;
				if($('#client_due').val()=='')
				totdue = totcost - $('#client_pay').val();
				else
				totdue = $('#client_due').val() - $('#client_pay').val();
				$('#client_due').val(totdue);				
				$('#client_total').val(totcost);
			}
			else
			{
				totcost = totday*2000;
				if($('#client_due').val()=='')
				totdue = totcost - $('#client_pay').val();
				else
				totdue = $('#client_due').val() - $('#client_pay').val();				
				totdue = totcost - $('#client_pay').val();
				$('#client_due').val(totdue);
				 
				$('#client_total').val(totcost);
			}
		//$('#search_result').html(data);
		}
		});					    
		});
    
});
*/
</script>
<!-- End calculate total cost  -->
<!-- Search on Room Status Start  -->
<script>
$(document).ready(function(){
    $("#search_bl").change(function(){
			
		$value=$(this).val();
		//alert($value);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_rs")}}',
		data:{'search':$value},
		success:function(data){
			
		$('#search_result_bl').html(data);
		}
		});					    
		});
    
});
</script>
<!-- Search on Room Status End  -->
<!-- Search on Room Condition Start  -->
<script>
$(document).ready(function(){
    $("#search_con").change(function(){
			
		$value=$(this).val();
		//alert($value);
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_rc")}}',
		data:{'search':$value},
		success:function(data){
			
		$('#search_result_bl').html(data);
		}
		});					    
		});
    
});
</script>
<!-- Search on Room Condition End  -->
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>
<div class="container">
  <h4>Room Status</h4>
  <div align="right"><a href="{{ route('room_info_create') }}">Room Entry</a> | <a href="{{ route('guest_entry_create') }}">Booking Entry</a></h2>
<div class="container">  
<div style="float:left"> 
<select class="form-control" id="search_bl" name="search_bl" >
	<option value="">Room Status</option>
    <option value="BL">BL</option>
    <option value="NBL">NBL</option>
    
</select>
</div>

<div style="float:left; padding-left: 10px;"> 
<select class="form-control" id="search_con" name="search_con" >
	<option value="">Room Condition</option>
    <option value="AC">AC</option>
    <option value="Non AC">Non AC</option>
    
</select>
</div> 
</div>     		
<div id="search_result_bl"></div> 
  <table class="table table-striped">
  <tr>
  	<th>Room No</th>
  	<th>Condition</th>
  	<th>Status</th>
  	<th>Action</th>
  
  </tr>
    @foreach($room_info as $passport)
    
	  <tr class="info">
        <th>{{$passport['room_no']}}</th>
        <td>{{$passport['condition']}}</td>
        <td>{{$passport['room_status']}}</td>
        <td><a href="{{ route('edit_room', $passport['id']) }}">Edit</a> | <a href="{{ route('destroy_room', $passport['id']) }}">Delete</a></td>

		</tr>

	
	

       @endforeach	 
	
		</table>
  {{ $room_info->links() }}
        
        
</div>



<div class="container">
  	
  <h4 >Payment Details</h4>
<div id="demo2" >


<div class="panel-body">
<div class="form-group">
<div class="form-group">
<p>Search:</p>
<div style="float:left"> 
<input type="text" class="form-control" id="search" name="search" placeholder="Enter Client ID"></input>
</div>
<div style="float:left; padding-left: 10px;"> 
<input placeholder="Check In" class="form-control" type="text" onfocus="(this.type='date')"  id="cindate" name="cindate"> 
</div>
<!--check out search box  -->
<div style="float:left; padding-left: 10px;"> 
<input placeholder="Check out" class="form-control" type="text" onfocus="(this.type='date')"  id="coutdate" name="coutdate"> </div>
<!-- check out search box end -->
<div style="float:left; padding-left: 10px;width:200px;" 
class="form-group"> 
	<select placeholder="Due"  class="form-control" id="duein" name="duein" > 
    	<option value="">Search Due/Paid</option>
    	<option value="due">Due</option>
    	<option value="paid">Paid</option>
	</select>
</div>
</div>
</div>
</div>
</div><hr />

<!-- Search Box End -->
<div id="search_result"></div>
<h4>Total Payment Information</h4>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Status</th>
        <th>Check In</th>
        <th>Check Out</th>
        
        <th>Total</th>
        <th>Paid</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($paid as $passport)
   <tr>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['client_status']}}</td>
   <td>{{$passport['client_date']}}</td>
   <td>{{$passport['checkout_date']}}</td>
   
   <td>{{$passport['client_total']}}</td>
   <td>{{$passport['client_pay']}}</td>
   
      
   <td>
   <span>          
   <!--<a href="{{action('AdminController@edit_book', $passport['id'])}}" class="btn btn-warning">Edit</a>
  |-->
 
   <form action="{{ route('pay.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
     </span>             
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  {{ $paid->links() }}
  </div>
</div>



<?php 
/*
$data = DB::table("payments")
	    ->select(DB::raw("SUM(client_pay) as count"))
		->where('client_id', 2)->get();
		foreach ($data as $key => $dat) {
//print $dat->count;
$tot = $dat->count;
}
print $tot;
*/
 ?>
<div class="container">
  <hr />	
  <h4 data-toggle="collapse" data-target="#demo1">Check In/Checkout</h4>
  <hr />
<div id="demo1" class="collapse">
<p><small>AC: 4000/=, Non AC: 2000/=</small></p>
      <form method="post" action="{{url('paystore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}  
  
  <?php 
  //fetch data from guest table
  $guest = \App\guest::all();  
  

  ?> 
  
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
</script>
  <script>

         jQuery(document).ready(function(){
			 $('#client_id').on('change', function(e) {
            //jQuery('#client_id').click(function(e){
				
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  
               jQuery.ajax({
				   
                  url: "{{ url('/grocery/post') }}",
                  method: 'get',
                  data: {
                     name: jQuery('#client_id').val()
                     //type: jQuery('#type').val(),
                     //price: jQuery('#price').val()
                  },
                  success: function(result){
		

			  
		  //$("#client_id").val(result.client_id);
		  $("#client_status").val(result.client_status);
		  $("#client_total").val(result.client_total);
		  $("#client_pay").val('');
		  $("#client_due").val(result.client_due);
		  
					  //alert(result.checkout_date);
					  
		  $("#client_date").val(result.client_date);
		  $("#room_no").val(result.room_no);
		  $("#checkout_date").val(result.checkout_date);
                     //console.log(result);
					 //jQuery('.alert').show();
                     //jQuery('.alert').html(result.success)
                  }});
               });
            });		   
		    </script>
  
  <script>
         jQuery(document).ready(function(){
			 $('#client_pay').on('click', function(e) {
            //jQuery('#client_id').click(function(e){
				
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  
               jQuery.ajax({
				   
                  url: "{{ url('/grocery/post1') }}",
                  method: 'get',
                  data: {
                     name: jQuery('#client_id').val()
                     //type: jQuery('#type').val(),
                     //price: jQuery('#price').val()
                  },
                  success: function(result){
		
					
			  
		  //$("#client_id").val(result.client_id);

		  $("#client_pay").val(result);

                     //console.log(result);
					 //jQuery('.alert').show();
                     //jQuery('.alert').html(result.success)
                  }});
               });
            });
			
         jQuery(document).ready(function(){
			 $('#client_pay').on('blur', function(e) {
            //jQuery('#client_id').click(function(e){
				
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  
               jQuery.ajax({
				   
                  url: "{{ url('/grocery/post1') }}",
                  method: 'get',
                  data: {
                     name: jQuery('#client_id').val()
                     //type: jQuery('#type').val(),
                     //price: jQuery('#price').val()
                  },
                  success: function(result){
		
					
			  
		  //$("#client_id").val(result.client_id);

		  $("#hid").val(result);
		  
		  var tot = parseInt($('#client_pay').val())+parseInt($("#hid").val());
		  
		  var due = parseInt($('#client_total').val())-parseInt(tot);
		  $("#client_due").val(due);

                     //console.log(result);
					 //jQuery('.alert').show();
                     //jQuery('.alert').html(result.success)
                  }});
               });
            });		   					   
		    </script>
  
  <script>  
  /*
$(document).ready(function(){
		
			$('#client_id').on('change', function() {
  				
				
        


        var id = $("#client_id").val();
		
		


        $.ajax({

           type:'POST',

           url:'/ajaxRequest',

           data:{id:id},

           success:function(data){
				alert("hi");
              //alert(data.success);

           }

        });				
			})
});
*/
</script>
		

		
		</script>	
   
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
         

            <label for="Name">Client Id:</label>
            <input type="hidden" name="hid" id="hid" />
            <select class="form-control" name="client_id" id="client_id">
               	<option value="">Select Id</option>
            @foreach($guest as $passport)
               	<option value="{{$passport['id']}}">	{{$passport['id']}}</option>
  			@endforeach


            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Status:</label>
           <select class="form-control" name="client_status" id="client_status">

           	<option value="Check In">Check In</option>
            <option value="Check Out">Check Out</option>

            </select>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Checkin Date:</label>
              <input type="Date" class="form-control" name="client_date" id="client_date">
            </div>
          </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="room_no">Room No:</label>
	<Select id="room_no" name="room_no" class="form-control">
    <option value="">Select</option>
    @foreach($room as $passport)
    	<option value="{{$passport->room_no}}">{{$passport->room_no}}</option>
    @endforeach
    </Select>
            </div>
          </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Checkout Date:</label>
              <input type="Date" class="form-control" name="checkout_date" id="checkout_date">
            </div>
          </div>
 
          
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Total Payment:</label>
              <input type="number" class="form-control" name="client_total" id="client_total" readonly="readonly">
            </div>
          </div>
          
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Total Paid:</label>
              <input type="number" class="form-control" name="client_pay" id="client_pay">
            </div>
          </div> 

        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Due:</label>
              <input type="number" class="form-control" name="client_due" id="client_due" readonly="readonly">
            </div>
          </div>

          
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>                            
</div>

	
  <h4 data-toggle="collapse" data-target="#demo">Booking</h4>
  <hr />	
<div  id="demo"  class="collapse">


<div class="panel-body">
<div class="form-group">
<div class="form-group">
<p>Search:</p>
<div style="float:left"> 
<input type="text" class="form-control" id="search_con" name="search_con" placeholder="Enter Contact No"></input>
</div>


</div>
</div>
</div><hr />

<div id="search_result_booking"></div>
<h4>Booking Information</h4>
<div align="right">
<!--<a href="{{action('AdminController@adminbooking_create')}}" class="btn btn-warning">Add Booking</a></div> --> 
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>contact_no</th>
        <!--<th>Room Type</th>-->
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($book as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['name']}}</td>
   <td>{{$passport['check_in']}}</td>
   <td>{{$passport['check_out']}}</td>
   
   <td>{{$passport['contact_no']}}</td>
   <!--<td>{{$passport['room_type']}}</td>-->
   
      
   <td>
   <span>          
   <!--<a href="{{action('AdminController@edit_book', $passport['id'])}}" class="btn btn-warning">Edit</a>
  |-->
 
   <form action="{{ route('book.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
     </span>             
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  </div>
  <hr />
 </div> 
 </div>
 
  
 @endif  
@endsection


  






