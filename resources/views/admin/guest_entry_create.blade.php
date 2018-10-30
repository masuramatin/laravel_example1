@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
                        
    <div class="container">
      <hr/><h2>Add Booking Information</h2><hr/>
      <form method="post" action="{{url('bkkstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}  
  
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="expenses">Guest ID:</label>                        
	<Select id="fr_booking" name="fr_booking">
    @foreach($booking as $passport)
    	<option value="{{$passport['id']}}">{{$passport['id']}}</option>
    @endforeach
    </Select>
          </div>
        </div>    
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="revenue">Room ID:</label>    
 	<Select id="fr_booking_r" name="fr_booking_r">
    @foreach($room as $passport)
    	<option value="{{$passport->id}}">{{$passport->id}}</option>
    @endforeach
    </Select>   
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
 @endif  
@endsection    
