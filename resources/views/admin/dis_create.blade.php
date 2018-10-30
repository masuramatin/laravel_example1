@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <hr/><h2>Add Distribution Item</h2><hr/>
      <form method="post" action="{{url('disstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Item Name:</label>
             <select class="form-control" name="item_name" id="item_name">
            <option value="">Select</option>                	
                        @foreach($dis as $pass)
                            <option value="{{$pass->      item_name}}">{{$pass->item_name}}</option>
                        @endforeach
            
            
                        </select>            
          </div>
        </div>
        
		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Date:</label>
              <input type="date" class="date form-control" name="date_dis">
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Quantity: </strong>  
            <input class="form-control"  type="number" id="quantity" name="quantity">   
         </div>
        </div>  
		
		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Status:</label>
			  <select  class="form-control" name="status">
			  <option value="">Select</option>
			  <option value="Receive">Receive</option>
			    <option value="Distribution">Distribution</option>
				 <option value="Waste">Waste</option>
				 </select>
             
            </div>
          </div>


		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">where:</label>
			  <select  class="form-control" name="where">
			  <option value="">Select</option>
			   <option value="Room">Room</option>
			    <option value="Washing">Washing</option>
				  <option value="Repair">Repair</option>
				    
			  </select>			  
           
            </div>
          </div>


		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Descripation:</label>
			  <textarea name="descripation" class="form-control"></textarea>
              
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
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>

@endsection


@section('foot')
    @parent

@endsection
  
