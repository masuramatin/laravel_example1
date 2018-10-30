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
      <hr/><h2>Add Employees</h2><hr/>
      <form method="post" action="{{url('empstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-3"></div>
          <div class="form-group col-md-9">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Designation:</label>
              <input type="text" class="form-control" name="designation">
            </div>
          </div>
          <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Date of Birth:</label>
              <input type="date" class="form-control" name="date_of_birth">
            </div>
          </div>
 			 <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Address:</label>
              <input type="text" class="form-control" name="address">
            </div>
          </div>
           <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Mobile:</label>
              <input type="number" class="form-control" name="contrct_no">
            </div>
          </div>
          <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
           <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Gender:</label>
              <input type="radio" name="gender" value="male"> Male
  				<input type="radio" name="gender" value="female"> Female
 				 <input type="radio" name="gender" value="other"> Other
            </div>
          </div>
          <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Marrital Status:</label>
              <input type="radio" name="marital_status" value="male"> Single
  				<input type="radio" name="marital_status" value="female"> Married
 				 <input type="radio" name="marital_status" value="other"> Other
            </div>
          </div>
           <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Joining Date:</label>
              <input type="date" class="form-control" name="joining_date">
            </div>
          </div>
          <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Bank Account Details:</label>
              <input type="text" class="form-control" name="bank_account_details">
            </div>
          </div>
            <div class="row">
          <div class="col-md-3"></div>
            <div class="form-group col-md-9">
              <label for="Email">Image:</label>
              <input type="text" class="form-control" name="image">
            </div>
          </div>

        <div class="row">
          <div class="col-md-3"></div>
          <div class="form-group col-md-9" style="margin-top:60px">
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