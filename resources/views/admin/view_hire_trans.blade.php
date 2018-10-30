@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->


    <div class="container">
      <h2>View Transport</h2><hr  />
		<div align="right"><button class="btn btn-warning">Print</button></div>
            <form  
  action="{{ route('hire_trans.view', $id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
         <table class="table table-striped">
      <tr>
        
				<th>Client Id </th>
				<th>Hire Date</th>
				<th>Transport Id</th>
				<th>Location</th>
				<th>Cost</th>
        </tr>     
       	 <tr>
			   <td>{{$passport['client_id']}}</td>
			   <td>{{$passport['hire_date']}}</td>
			   <td>{{$passport['transport_id']}}</td>   
			   <td>{{$passport['location']}}</td>   
			   <td>{{$passport['cost']}}</td>   
	  
	   </tr>
        
        
        
        
        
      </form>
    </div>
</table>
    <hr />
@endif  

@endsection
  