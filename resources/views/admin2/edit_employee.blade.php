@extends('layouts.app')


@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
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
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
    @endif 
@endsection


@section('foot')
    @parent

@endsection
  