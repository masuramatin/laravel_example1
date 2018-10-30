@extends('layouts.app')
@section('content')
@if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->

    <div class="container" >
      <h2>View Distribution Item</h2><hr  />
		<div align="right"><button class="btn btn-warning">Print</button></div>
            <form action="{{ route('dis.view', $id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          
            
        
<table class="table table-striped">
      <tr>
        <th>Item Name </th>
		<td>{{$passport->item_name}}</td>
		</tr>
		
		<tr>
        <th>Date</th>
		<td>{{$passport->date_dis}}</td>
		</tr>
		
		<tr>
          <th>Quantity</th>
		  <td>{{$passport->quantity}}</td>       
      </tr>
   
	  <tr>
          <th>Status</th>
		  <td>{{$passport->status}}</td>       
      </tr>
	  <tr>
          <th>Where</th>
		  <td>{{$passport->where}}</td>       
      </tr>
	  <tr>
          <th>Descripation</th>
		  <td>{{$passport->descripation}}</td>       
      </tr>
</table>
      </form>
    <hr />
@endsection


@section('foot')
    @parent
@endif  
@endsection
  