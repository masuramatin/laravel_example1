@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->



    <div class="container">
      <h2>Edit Distribution Item</h2><br  />

            <form method="post" action="{{ route('dis.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Item Name:</label>
            <input type="text" class="form-control" name="item_name" value="{{$passport->item_name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Date</label>
              <input type="date" name="date_dis" class="form-control" value="{{$passport->date_dis}}">
            </div>
          </div>
       
	    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Quantity</label>
              <input type="number" class="form-control" name="quantity" value="{{$passport->quantity}}">
            </div>
          </div>
        

 
	    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Status</label>             
			  <select  class="form-control" name="status">
			  <option value="{{$passport->status}}">{{$passport->status}}</option>			
			  <option value="receive">Receive</option>
			    <option value="distribution">Distribution</option>
				 <option value="waste">Waste</option>
				 </select>
			  
            </div>
          </div>
        
 <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Where</label>             
			  <select  class="form-control" name="where">
			  <option value="{{$passport->where}}">{{$passport->where}}</option> 			 
			   <option value="Room">Room</option>
			    <option value="Washing">Washing</option>
				  <option value="Repair">Repair</option>
				    
			  </select>			  
           
            </div>
          </div>  
			  
			  
			  
			  
			  
			  
        
			<div class="row">
			  <div class="col-md-4"></div>
				<div class="form-group col-md-4">
              <label for="number">Descripation</label>
			  <textarea class="form-control" name="descripation">{{$passport->descripation}}</textarea>             
            </div>
          </div>




        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Edit</button>
          </div>
        </div>
      </form>
    </div>
@endsection


@section('foot')
    @parent
 @endif  

@endsection
  