@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
<h2 align="center"> Food Details Information</h2>
<hr/>
<div class="container">
<div class="row">

@foreach($hm_food_items as $passport)
    <div class="col-md-3">
      <div class="thumbnail">
          <img src="{{ url('/') }}/img/{{$passport->food_image}}" alt="Lights" style="width:100%">
          <div class="caption">
            <h3 align="center">{{$passport->food_name}}</h3>
            <h4 align="center">{{$passport->price}}</h4>
          </div>
      </div>
    </div>

@endforeach 
      {{ $hm_food_items->links() }}

  </div>
   
<hr/>
<div class="container">
  <h4 data-toggle="collapse" data-target="#demo1">Food Information</h4>
<div id="demo1" class="collapse">
<div align="right"><a href="{{action('AdminController@food_create')}}" class="btn btn-warning">Add Food</a></div>    
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Food Name</th>
        <th>Description</th>
        <th>Price</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_food_items as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['food_name']}}</td>
   <td>{{$passport['description']}}</td>
   <td>{{$passport['price']}}</td>
   <td>          
   <a href="{{action('AdminController@edit_food', $passport['id'])}}" class="btn btn-warning">Edit</a>
   |
   <form action="{{ route('food.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>       
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table>
  {{ $hm_food_items->links() }}

</div> 
</div>

<!-- food distribute start -->
<!-- Search Box Start -->
<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>                        
<script>
$(document).ready(function(){
    $("#fd").change(function(){
			
		$value=$(this).val();
			//alert($value);
			$.ajax({
			type : 'get',
			url : '{{URL::to("search_fd")}}',
			data:{'search':$value},
			success:function(data){
				$('#search_result').html(data);
			}
			});					    
		});
    
});
</script> 

<div class="container">
  <h4 data-toggle="collapse" data-target="#demo2">Food Distribute</h4>
<div id="demo2" class="collapse">
<div class="container"> 
	<h3>Search</h3>
	<div class="row">
    	<div class="col-md-3"> 
        	<label>Date</label>
			<input type="date" name="fd" id="fd"  class="form-control" />
        </div>
</div>
</div>
<hr/>
<div id="search_result"></div>  

 
<div align="right"><a href="{{action('AdminController@food_distribute_create')}}" class="btn btn-warning">Add Food Distribute</a></div>    
<table class="table table-striped">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Room No</th>
        <th>Date</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($food_distribute as $passport)
   <tr>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['room_no']}}</td>
   <td>{{$passport['cdate']}}</td>
   <td>          
<a href="{{action('AdminController@edit_food_distribute', $passport['id'])}}" class="btn btn-warning">Edit</a>   |
   <form action="{{ route('destroy_food_distribute', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>  
         |
   <a href="{{action('AdminController@food_distribute_invoice', $passport['id'])}}" class="btn btn-warning">Invoice</a>
               
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table>
  {{ $food_distribute->links() }}

</div>
</div>
<!-- food distribute end -->  
 @endif  
@endsection
  