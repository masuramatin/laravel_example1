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
      <hr/><h2>Hire Transport</h2><hr/>
      <form method="post" action="{{url('hire_transstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">       

            <label for="Name">Client Id:</label>
            <select class="form-control" name="client_id" id="client_id">
               	<option value="">Select Id</option>
            @foreach($booking as $passport)
               	<option value="{{$passport->client_id}}">{{$passport->client_id}}</option>
  			@endforeach


            </select>
          </div>
        </div>
        
		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Hire Date:</label>
              <input type="date" class="date form-control" name="hire_date">
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">       

            <label for="Name">Transport Id:</label>
            <select class="form-control" name="transport_id" id="transport_id">
               	<option value="">Select Id</option>
            @foreach($trans as $passport)
               	<option value="{{$passport->transport_id}}">{{$passport->transport_id}}</option>
  			@endforeach


            </select>
          </div>
        </div> 
		
		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Location :</label>
              <textarea name="location" class="form-control"></textarea>
              
            </div>
          </div>


		
		<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Cost :</label>
              <input type="number" name="cost" class="form-control">
              
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
  
