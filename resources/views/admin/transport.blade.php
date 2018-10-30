@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
 

    <h2 align="center"> Transport Details Information</h2>
    <hr/>
    <div class="container">
      <div class="row">

       @foreach($transport as $passport)
		<div class="col-md-4">
 	     <div class="thumbnail">
          <img src="{{ url('/') }}/img/{{$passport->image}}" alt="Lights" style="width:100%">
          <div class="caption">
            <h4 align="center"><a href="/view_transport/{{$passport->id}}">{{$passport->description}}</a></h4>
          </div>
      </div>
    </div>

    @endforeach 
      {{ $transport->links() }}

 </div>
  
 <hr/>
  
<div align="right"><a href="{{action('AdminController@transport_create')}}" class="btn btn-warning">Add Transport</a></div> 

 
      <!-- Search Box Start -->
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#search").change(function(){
	
		$value=$(this).val();
		$.ajax({
		type : 'get',
		url : '{{URL::to("search_trans")}}',
		data:{'search':$value},
		success:function(data){
		$('#search_result').html(data);
		}
		});		    
		});
    
});
</script>

<div class="row">
<div class="col-sm-1">
<label class="form-group" style="font-size:20px">Search</label> 
</div>
<div class="col-sm-2">

	<select class="form-control" id="search" name="search" > 
    	<option value="">Select Item</option>
    	<option value="Car">Private Car</option>
    	<option value="Micro">Micro</option>
		<option value="Bus">Bus</option>
		<option value="Minibus">Minibus</option>
		<option value="Auto">Auto</option>
		<option value="Truck">Truck</option>
		<option value="Bike">Bike</option>
		
	</select>
</div>
   </div>
         <div id="search_result"></div>

</div>


<!--search box end -->
 
   <div class="container">
      <div class="row">
  <table class="table table-striped">
    <thead>
      <tr>
        
        <th>Transport Id</th>
        <th>Type of Transport</th>
        <th>Image</th>
        <th>Description</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($transport as $passport)
   <tr>
   <td>{{$passport['transport_id']}}</td>
   <td>{{$passport['type_of_transport']}}</td>
   <td>{{$passport['image']}}</td>
   <td>{{$passport['description']}}</td>
   
   
      
   <td> 
   
      <a href="{{action('AdminController@view_transport', $passport['id'])}}" class="btn btn-warning">View</a>
      
      <a href="{{action('AdminController@edit_transport', $passport['id'])}}" class="btn btn-warning">Edit</a>
      
     

         

 
   <form action="{{ route('transport.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>        
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
      {{ $transport->links() }}
	  
	  </div>
	  </div>
	  
	   <div class="container">
      <div class="row">
	  
	  
  <h2>Hire Transport</h2>
<div align="right"><a href="{{action('AdminController@hire_trans_create')}}" class="btn btn-warning">Hire Transport</a></div>  
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Client Id </th>
        <th>Hire Date</th>

          <th>Transport Id</th>
		  <th>Location</th>
		  	  <th>Cost</th>
		  
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_transport_hire as $passport)
   <tr>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['hire_date']}}</td>

   <td>{{$passport['transport_id']}}</td>   
     <td>{{$passport['location']}}</td>   
	 <td>{{$passport['cost']}}</td>   
	  
   <td> 
     <a href="{{action('AdminController@invoice_hire_trans', $passport['id'])}}" class="btn btn-warning">Invoice</a>
         
   
            
    <a href="{{action('AdminController@edit_hire_trans', $passport['id'])}}" class="btn btn-warning">Edit</a>
  
 
   <form action="{{ route('hire_trans.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>     
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
   {{ $hm_transport_hire ->links() }}
  </div>
	  
	  

@endif  

@endsection
