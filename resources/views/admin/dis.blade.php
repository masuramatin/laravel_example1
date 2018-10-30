@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
    <div class="container">


  <h2>Distrubtion Item</h2>
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
  
  </div>
@endsection


@section('foot')
    @parent
	
 @endif  
	

@endsection
  