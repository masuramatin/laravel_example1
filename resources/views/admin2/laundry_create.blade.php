<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <hr/><h2>Order</h2><hr/>
      <form method="post" action="{{url('lystore')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Client Id:</label>
            <input type="number" class="form-control" name="client_id" id="client_id">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Order Date:</label>
              <input type="date" class="form-control" name="order_date" id="order_date">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Delivery Date:</label>
              <input type="date" class="form-control" name="delivery_date" id="delivery_date">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Number of Cloth: </strong>  
            <input class="date form-control"  type="number" id="number_of_cloth" name="number_of_cloth">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Service Charge: </strong>  
            <input class="date form-control"  type="number" id="service_charge" name="service_charge">   
         </div>
        </div>   
		
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Type of Washing: </strong>  
            <input class="date form-control"  type="text" id="type_of_washing" name="type_of_washing">   
         </div>
        </div>  
		
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Cloth Type: </strong>  
            <input class="date form-control"  type="text" id="cloth_type" name="cloth_type">   
         </div>
        </div>  
		
		<div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Comment: </strong>  
            <textarea class="date form-control" id="comment" name="comment"></textarea><br />
			<input type="submit" class="btn btn-success" value="submit">
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