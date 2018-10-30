@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->

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
		url : '{{URL::to("search_goods")}}',
		data:{'search':$value},
		success:function(data){
			
		$('#search_result').html(data);
		}
		});		    
		});
    
});
</script>
    <h2 align="center"> Goods Details Information</h2>
    <hr/>
    <div class="container">
      <div class="row">

       @foreach($hm_cleaning_supp as $passport)
		<div class="col-md-4">
 	     <div class="thumbnail">
          <img src="{{ url('/') }}/img/{{$passport->goods_image}}" alt="Lights" style="width:100%">
          <div class="caption">
            <h3 align="center"><a href="/">{{$passport->item_name}}</a></h3>
            <h4 align="center"><a href="/">{{$passport->descripation}}</a></h4>
          </div>
      </div>
    </div>

    @endforeach 
      {{ $hm_cleaning_supp->links() }}

 </div>
  
 <hr/>


 
 
    <div class="container">
		 <h4 data-toggle="collapse" data-target="#demo1">Goods Information</h4>
		 	 <div class="panel-body">

</div>
</div>

		 
		 
		 
			<div id="demo1" class="collapse">
<div class="form-group">

<div class="row">
<div class="col-sm-1">
<label class="form-group" style="font-size:20px">Search</label> 
</div>
<div class="col-sm-2">


	<select class="form-control" id="search" name="search" > 
    	<option value="">Select Item</option>
    	<option value="Shop & Shampo">Shop & Shampo</option>
    	<option value="Tawell">Tawell</option>
		<option value="Box">Box</option>
		<option value="Mug">Mug</option>
		<option value="Cot">Cot</option>
		<option value="Room Spray">Room Spray</option>
		<option value="Bed sheet">Bed sheet</option>
		<option value="Romantic Moshari">Romantic Moshari</option>
		<option value="Pillow">Pillow</option>
	</select>
</div>
</div>
         <div id="search_result"></div>

</div>

			
			<div align="right"><a href="{{action('AdminController@goods_create')}}" class="btn btn-warning">Add Goods</a></div> 
			
			
			
			 
			   <table class="table table-striped">
				<thead>
				  <tr>
					<th>Item Name </th>
					<th>Descripation</th>
					<th>Num Of Item</th>
					<th>Receive Date</th>
					<th>Image</th>       
					<th colspan="2">Action</th>
				  </tr>
			</thead>
		<tbody>  
			  @foreach($hm_cleaning_supp as $passport)
			   <tr>
				 <td>{{$passport['item_name']}}</td>
				 <td>{{$passport['descripation']}}</td>
				 <td>{{$passport['num_of_item']}}</td>
				 <td>{{$passport['receive_date']}}</td>   
				 <td>{{$passport['goods_image']}}</td>    
			    <td>
				<a href="{{action('AdminController@view_goods', $passport['id'])}}" class="btn btn-warning">View</a>       
    			<a href="{{action('AdminController@edit_goods', $passport['id'])}}" class="btn btn-warning">Edit</a>
  
 
   			<form action="{{ route('goods.destroy', $passport['id']) }}" method="get">
            
            		<input name="_method" type="hidden" value="DELETE">
            		<button class="btn btn-danger" type="submit">Delete</button>
      		</form> 														</td>
   
   				</tr>
  			@endforeach
  			</tbody>
 		 </table> 
  			{{ $hm_cleaning_supp->links() }}
  
  		</div>
  </div>
  
  <!-- Goods Distribution Start -->
  <div class="container">
  <div class="row">
  	<h4 data-toggle="collapse" data-target="#demo2">Goods Distribution</h4>
	<div id="demo2" class="collapse"> 
<div align="right"><a href="{{action('AdminController@dis_create')}}" class="btn btn-warning">Add Item</a></div>  
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Name </th>
        <th>Date</th>

          <th>Quantity</th>
		  <th>Status</th>
		  <th>Where</th>
		  <th>Descripation</th>
		  
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_item_distribute as $passport)
   <tr>
   <td>{{$passport['item_name']}}</td>
   <td>{{$passport['date_dis']}}</td>

   <td>{{$passport['quantity']}}</td>   
     <td>{{$passport['status']}}</td>   
	 <td>{{$passport['where']}}</td>   
	 <td>{{$passport['descripation']}}</td>    
   <td> 
     <a href="{{action('AdminController@view_dis', $passport['id'])}}" class="btn btn-warning">View</a>
         
   
            
    <a href="{{action('AdminController@edit_dis', $passport['id'])}}" class="btn btn-warning">Edit</a>
  
 
   <form action="{{ route('dis.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>     
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
     
 {{ $hm_item_distribute->links() }}

    </div>
  </div>  
  
  <!-- Goods Distribution End -->
<div class="container">
	<h4 data-toggle="collapse" data-target="#demo3">Store Information</h4>
  <div  id="demo3" class="collapse">
        {!! $option !!} 
  </div>              
</div>  
  
   @endif  

@endsection



	
	

  