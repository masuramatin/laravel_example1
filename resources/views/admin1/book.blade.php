@extends('layouts.app')


@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
  <h2>Room Status</h2>
  
  <table class="table">
    <thead>
      <tr class="info">
        <th>Room No: 101</th>
        <th>Condition: AC,TV</th>
        <th>Status: NBL</th>
      </tr>
    </thead>
    <tbody>
      <tr class="success">
        <th>Room No: 101</th>
        <th>Condition: AC,TV</th>
        <th>Status: BL</th>
      </tr>      
      <tr class="info">
        <th>Room No: 102</th>
        <th>Condition: AC,TV</th>
        <th>Status: NBL</th>
      </tr>
      <tr class="danger">
        <th>Room No: 103</th>
        <th>Condition: AC,TV</th>
        <th>Status: RP</th>
      </tr>
      <tr class="info">
        <th>Room No: 104</th>
        <th>Condition: AC,TV</th>
        <th>Status: NBL</th>
      </tr>
      <tr class="warning">
        <th>Room No: 105</th>
        <th>Condition: AC,TV</th>
        <th>Status: BK</th>
      </tr>
      <tr class="info">
        <th>Room No: 106</th>
        <th>Condition: AC,TV</th>
        <th>Status: NBL</th>
      </tr>
    </tbody>
  </table>
</div>
 
<div class="container">
  <hr />	
  <h2 data-toggle="collapse" data-target="#demo1">Check In/Checkout</h2>
  <hr />
<div id="demo1" class="collapse">
      <form method="post" action="" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Client Id:</label>
            <select class="form-control" name="client_id">
            	<option value="1001">1001</option>
                <option value="1002">1002</option>
                <option value="1003">1003</option>
                <option value="1004">1004</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Status:</label>
           <select class="form-control" name="client_status">            	<option value="Check In">Check In</option>
                <option value="Check Out">Check Out</option>

            </select>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Date:</label>
              <input type="Date" class="form-control" name="cdate">
            </div>
          </div>
          
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Payment:</label>
              <input type="number" class="form-control" name="cdate">
            </div>
          </div>
          
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Due:</label>
              <input type="number" class="form-control" name="cdate">
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

	
  <h2 data-toggle="collapse" data-target="#demo">Booking</h2>
  <hr />	
<div  id="demo"  class="collapse">
<div align="right">
<!--<a href="{{action('AdminController@adminbooking_create')}}" class="btn btn-warning">Add Booking</a></div> --> 
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Client Id</th>
        <th>Check In</th>
        <th>Check Out</th>
        <!--<th>Room Number</th>
        <th>Room Type</th>-->
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($book as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['check_in']}}</td>
   <td>{{$passport['check_out']}}</td>
   
   <!--<td>{{$passport['room_num']}}</td>
   <td>{{$passport['room_type']}}</td>-->
   
      
   <td>
   <span>          
   <a href="{{action('AdminController@edit_book', $passport['id'])}}" class="btn btn-warning">Edit</a>
  |
 
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
 @endif  
@endsection


  






