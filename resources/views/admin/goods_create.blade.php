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
      <hr/><h2>Add Goods</h2><hr/>
      <form method="post" action="{{url('gdstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Item Name:</label>
            <input type="text" class="form-control" name="item_name">
          </div>
        </div>
		
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Descripation:</label>
            <input type="text" class="form-control" name="descripation">
          </div>
        </div>
		
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Number Of Items:</label>
              <input type="number" class="form-control" name="num_of_item">
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Reciving Date: </strong>  
            <input class="date form-control"  type="date" id="receive_date" name="receive_date">   
         </div>
        </div>      
        
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Goods Image: </strong>  
            <input class="form-control"  type="file" id="goods_image" name="goods_image">   
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
  
