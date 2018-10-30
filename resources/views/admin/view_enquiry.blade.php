@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="container">
      <h2 align="center">View Enquiry</h2><hr  />
		<div align="right"><button class="btn btn-warning">Print</button></div>
            <form  
  action="{{ route('enquiry.view', $id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            {{$passport->name}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="phone">Phone</label>
              {{$passport->phone}}
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              {{$passport->email}}
            </div>
          </div>
          <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="message">Message</label>
              {{$passport->message}}
            </div>
          </div>
        
      </form>
    </div>
    <hr />
@endsection


@section('foot')
    @parent

@endsection
  