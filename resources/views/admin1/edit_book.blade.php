@extends('layouts.app')
@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else
    <div class="container">
      <h2>Edit Food Item</h2><hr  />

            <form method="post" 
            action="{{ route('book.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Client Id:</label>
            <input type="number" class="form-control" name="client_id" value="{{$passport->client_id}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Room Number</label>
              <input type="number" name="room_num" class="form-control" value="{{$passport->room_num}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Room Type:</label>
              <input type="text" class="form-control" name="room_type" value="{{$passport->room_type}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Check In : </strong>  
            <input class="date form-control"  type="date" id="check_in" name="check_in" value="{{$passport->check_in}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Check Out : </strong>  
            <input class="date form-control"  type="date" id="check_out" name="check_out" value="{{$passport->check_out}}">   
         </div>
        </div>



        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
   
 @endif  
    
@endsection
  