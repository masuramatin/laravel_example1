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
    $("#odr").change(function(){
			
		$value=$(this).val();
			//alert($value);
			$.ajax({
			type : 'get',
			url : '{{URL::to("search_odr")}}',
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
    $("#dlv").change(function(){
			
		$value=$(this).val();
			//alert($value);
			$.ajax({
			type : 'get',
			url : '{{URL::to("search_dlv")}}',
			data:{'search':$value},
			success:function(data){
				$('#search_result').html(data);
			}
			});					    
		});
    
});
</script> 


<!-- Search Box End -->
                       
<div class="container">
  <h2>Laundry</h2>
<hr />
<div class="container"> 
	<h3>Search</h3>
	<div class="row">
    	<div class="col-md-3"> 
        	<label>Order Date</label>
			<input type="date" name="odr" id="odr"  class="form-control" />
        </div>
    	<div class="col-md-3"> 
        	<label>Delivery Date</label>
			<input type="date" name="dlv" id="dlv"  class="form-control" />
        </div>        
     </div>   
</div>
<hr />
<div id="search_result"></div>  
<div align="right"><a href="{{action('AdminController@laundry_create')}}" class="btn btn-warning">Add Laundry</a></div>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Order Date</th>
        <th>Delivery Date</th>
        <th>Number of Cloth</th>

       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_laundry as $passport)
   <tr>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['order_date']}}</td>
   <td>{{$passport['delivery_date']}}</td>
   <td>{{$passport['number_of_cloth']}}</td>
     
   <td>          
   <a href="{{action('AdminController@edit_laundry', $passport['id'])}}" class="btn btn-warning" class="btn btn-warning">Edit</a>
   <form action="{{ route('laundry.destroy', $passport['id']) }}" method="get">
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          
   <a href="{{action('AdminController@laundry_invoice', $passport['id'])}}" class="btn btn-warning" class="btn btn-warning">Invoice</a>
                     
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  {{ $hm_laundry->links() }}
</div>  
 @endif  
@endsection
  