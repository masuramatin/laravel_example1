@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
    <div class="container">


  <h2>Hire Transport</h2>
<div align="right"><a href="{{action('AdminController@hire_trans_create')}}" class="btn btn-warning">Add Item</a></div>  
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
     <a href="{{action('AdminController@view_hire_trans', $passport['id'])}}" class="btn btn-warning">View</a>
         
   
            
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
  
  </div>
@endsection


@section('foot')
    @parent
	
 @endif  
	

@endsection
  