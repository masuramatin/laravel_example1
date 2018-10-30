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
      <hr/><h2>Add Food Distributes</h2><hr/>
      <form method="post" action="{{url('fooddistributestore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="client_id">Client ID:</label>
                <input type="number" class="form-control" name="client_id" id="client_id">
              </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="room_no">Room No:</label>
              <input type="number" class="form-control" name="room_no" id="room_no">
            </div>
        </div>

		<div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item1">Food Item1:</label>
              <input type="text" class="form-control" name="food_item1" id="food_item1">
            </div>
            <div class="form-group col-md-2">
              <label for="cost1">Cost:</label>
              <input type="number" class="form-control" name="cost1" id="cost1">
            </div>            
         </div>
         
		<div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item2">Food Item2:</label>
              <input type="text" class="form-control" name="food_item2" id="food_item2">
            </div>
            <div class="form-group col-md-2">
              <label for="cost2">Cost:</label>
              <input type="number" class="form-control" name="cost2" id="cost2">
            </div>            
         </div>
         
         <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item3">Food Item3:</label>
              <input type="text" class="form-control" name="food_item3" id="food_item3">
            </div>
            <div class="form-group col-md-2">
              <label for="cost3">Cost:</label>
              <input type="number" class="form-control" name="cost3" id="cost3">
            </div>            
         </div>
          
                <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item4">Food Item4:</label>
              <input type="text" class="form-control" name="food_item4" id="food_item4">
            </div>
            <div class="form-group col-md-2">
              <label for="cost4">Cost:</label>
              <input type="number" class="form-control" name="cost4" id="cost4">
            </div>            
         </div>
               <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item5">Food Item5:</label>
              <input type="text" class="form-control" name="food_item5" id="food_item5">
            </div>
            <div class="form-group col-md-2">
              <label for="cost5">Cost:</label>
              <input type="number" class="form-control" name="cost5" id="cost5">
            </div>            
         </div>
         
               <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item6">Food Item6:</label>
              <input type="text" class="form-control" name="food_item6" id="food_item6">
            </div>
            <div class="form-group col-md-2">
              <label for="cost6">Cost:</label>
              <input type="number" class="form-control" name="cost6" id="cost6">
            </div>            
         </div>
               <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item7">Food Item7:</label>
              <input type="text" class="form-control" name="food_item7" id="food_item7">
            </div>
            <div class="form-group col-md-2">
              <label for="cost7">Cost:</label>
              <input type="number" class="form-control" name="cost7" id="cost7"> 
            </div>            
         </div>
            <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item8">Food Item8:</label>
              <input type="text" class="form-control" name="food_item8" id="food_item8">
            </div>
            <div class="form-group col-md-2">
              <label for="cost8">Cost:</label>
              <input type="number" class="form-control" name="cost8" id="cost8">
            </div>            
         </div>
               <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item9">Food Item9:</label>
              <input type="text" class="form-control" name="food_item9" id="food_item9">
            </div>
            <div class="form-group col-md-2">
              <label for="cost9">Cost:</label>
              <input type="number" class="form-control" name="cost9" id="cost9">
            </div>            
         </div>
         <div class="row">
        	<div class="col-md-4"></div>
            <div class="form-group col-md-2">
              <label for="food_item10">Food Item10:</label>
              <input type="text" class="form-control" name="food_item10" id="food_item10">
            </div>
            <div class="form-group col-md-2">
              <label for="cost10">Cost:</label>
              <input type="number" class="form-control" name="cost10" id="cost10">
            </div>            
         </div>
         <div class="row">

        	<div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="food_item7">Date:</label>
              <input type="date" class="form-control" name="cdate" id="cdate">
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
  
