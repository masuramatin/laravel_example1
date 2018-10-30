@extends('faru.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
  <h2>Room Booking</h2>
  <hr/>

 <form class="form-horizontal" method="post" action="{{url('bookingstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
  
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
	<textarea class="form-control" id="address" name="address" placeholder="Write address"></textarea> 
     
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact No:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="contact_no"  name="contact_no" placeholder="Enter contact">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="check in">Check In:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="check_in" id="check_in" placeholder="Enter check in">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="check Out">Check Out:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" name="check_out" id="check_out" placeholder="Enter check out">
    </div>
  </div>   
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
    </div>
  </div>
  
  <div class="form-group">
 <label class="control-label col-sm-2" for="radio">Bed Type:</label>
    <div class="col-sm-10">
 <label class="radio-inline">
      <input type="radio" name="bed_type" value="Single">Single 
    </label>
    <label class="radio-inline">
      <input type="radio" name="bed_type" value="Double">Double
    </label>
    </div>
  </div> 
 <div class="form-group">
 <label class="control-label col-sm-2" for="radio">Room Condition:</label>
    <div class="col-sm-10">
    <label class="radio-inline">
      <input type="radio" name="room_con" value="AC">AC
    </label> 
    <label class="radio-inline">
      <input type="radio" name="room_con" value="None Ac"> None AC
    </label>   
    </div>
  </div>
  
  <div class="form-group">
 <label class="control-label col-sm-2" for="radio"></label>
    <div class="col-sm-10">
 <label class="radio-inline">
      Single AC: 2000/= 
    </label>
    <label class="radio-inline">
      Double AC: 3000/=
    </label>
    </div>
  </div> 
 <div class="form-group">
 <label class="control-label col-sm-2" for="radio"></label>
    <div class="col-sm-10">
    <label class="radio-inline">
      Single Non AC: 500/=
    </label> 
    <label class="radio-inline">
      Double Non AC: 700/=
    </label>   
    </div>
  </div>   
     
   

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form> 
@endsection


@section('foot')
    @parent

@endsection

