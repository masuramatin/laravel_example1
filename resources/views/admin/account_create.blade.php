@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <hr/><h2>Add Account</h2><hr/>
      <form method="post" action="{{url('accstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}  
  
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="expenses">Type:</label>
            	<select name="expenses" id="expenses" class="form-control">
                	<option value="">Select</option>
                	<option value="Expense">Expense</option>
                	<option value="Revenue">Revenue</option>
                    
                </select>
          </div>
        </div>
		<!--
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="revenue">Revenue:</label>
              <input type="text" class="form-control" name="revenue">
            </div>
          </div>
		-->
		     <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description">
          </div>
        </div>
		
		  <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="amount">Amount:</label>
              <input type="number" class="form-control" name="amount">
            </div>
          </div>
		  
		    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">date:</label>
              <input type="date" class="form-control" name="date">
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
  
 @endif  
@endsection