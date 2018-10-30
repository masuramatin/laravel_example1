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
      <hr/><h2>Add Offer</h2><hr/>
      <form method="post" action="{{url('offerstore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Title 1:</label>
            <input type="text" class="form-control" name="title1" id="title1">
          </div>
        </div>
       
	    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Name">Title 2:</label>
              <input type="text" class="form-control" name="title2" id="title2">
            </div>
          </div>
       
	    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Title 3:</label>
              <input type="text" class="form-control" name="title3" id="title3">
            </div>
          </div>
		  
		     </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">descripation 1:</label>
              <input type="text" class="form-control" name="descripation1" id="descripation1">
            </div>
          </div>
		     </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">descripation 2:</label>
              <input type="text" class="form-control" name="descripation2" id="descripation2">
            </div>
          </div>
		     </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">descripation 3:</label>
              <input type="text" class="form-control" name="descripation3" id="descripation3">
            </div>
          </div>
		  
		  

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Image 1 : </strong>  
            <input class="form-control"  type="text" id="image1" name="image1">   
         </div>
        </div>
        
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Image 2 : </strong>  
            <input class="form-control"  type="text" id="image2" name="image2">   
         </div>
        </div>        

<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Image 3 : </strong>  
            <input class="form-control"  type="text" id="image3" name="image3">   
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