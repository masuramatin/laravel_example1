@extends('faru.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
  <h2>Room Booking</h2>

 <form class="form-horizontal" action="/action_page.php">
<div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Enter name">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="adddress" placeholder="Enter addrss">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact No:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="contact" placeholder="Enter contact">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="check in">Check In:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" placeholder="Enter check in">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="check Out">Check Out:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" placeholder="Enter check out">
    </div>
  </div>   
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
  </div>
  
  <div class="form-group">
 <label class="control-label col-sm-2" for="radio">Bed Type:</label>
    <div class="col-sm-10">
 <label class="radio-inline">
      <input type="radio" name="optradio">Single 
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Double
    </label>
    </div>
  </div> 
 <div class="form-group">
 <label class="control-label col-sm-2" for="radio">Room Conditin:</label>
    <div class="col-sm-10">
    <label class="radio-inline">
      <input type="radio" name="optradio">AC
    </label> 
    <label class="radio-inline">
      <input type="radio" name="optradio"> None AC
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
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form> 
@endsection


@section('foot')
    @parent

@endsection

