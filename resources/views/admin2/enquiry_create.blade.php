@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

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
      <hr/><h2>Add Enquiry</h2><hr/>
      <form method="post" action="{{url('enstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name"> Name:</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Phone:</label>
              <input type="number" class="form-control" name="phone">
            </div>
          </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Email: </strong>  
            <input class="form-control"  type="email" id="email" name="email">   
         </div>
        </div>        

 <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Message: </strong>  
            <textarea  class="form-control"  id="message" name="message">   </textarea>
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
<hr/>
@endsection


@section('foot')
    @parent

@endsection
  