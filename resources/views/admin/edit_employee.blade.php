@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="container">
      <h2>Edit Employee List</h2><br  />

            <form method="post" 
            action="{{ route('employee.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$passport->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Designation:</label>
              <input type="text" name="designation" class="form-control" value="{{$passport->designation}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Date of Birth:</label>
              <input type="date" class="form-control" name="date_of_birth" value="{{$passport->date_of_birth}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Address:</strong>  
            <input class="date form-control"  type="text" id="address" name="address" value="{{$passport->address}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Mobile:</strong>  
            <input class="date form-control"  type="number" id="contrct_no" name="contrct_no" value="{{$passport->contrct_no}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Email:</strong>  
            <input class="date form-control"  type="text" id="email" name="email" value="{{$passport->email}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Joining Date:</strong>  
            <input class="date form-control"  type="date" id="joining_date" name="joining_date" value="{{$passport->joining_date}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Bank Account Details:</strong>  
            <input class="date form-control"  type="text" id="bank_account_details" name="bank_account_details" value="{{$passport->bank_account_details}}">   
         </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>Salary</strong>  
            <input class="date form-control"  type="number" id="salary" name="salary" value="{{$passport->salary}}">   
         </div>
        </div>
        
         <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
          <strong>Schedule</strong>  
            <select name="schedule" class="form-control" id="schedule">
              <option value="{{$passport->schedule}}">{{$passport->schedule}}</option>
              <option value="Moring">06:01AM-12:00PM</option>
              <option value="Day">12:01PM-06:00PM</option>
              <option value="Evening">06:01PM-12:00AM</option>
              <option value="Night">12:01AM-06:00AM</option>
              </select>   
         </div>
        </div>
        
           
            <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Image:</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
          </div>
		  
          <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image}}" height="100" width="100">
          </div>
        </div>


        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
@endsection


@section('foot')
    @parent

@endsection
  