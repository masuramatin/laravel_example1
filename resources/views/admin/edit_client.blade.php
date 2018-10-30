@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="container">
      <h2>Edit Client Info</h2><br  />

            <form method="post" 
            action="{{ route('client.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
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
              <label for="email">Description</label>
              <textarea name="address" class="form-control">{{$passport->address}}</textarea>
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Contact:</label>
              <input type="number" class="form-control" name="contact" value="{{$passport->contact}}">
            </div>
          </div>



        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">National Id:</label>
            <input type="text" class="form-control" name="national_id" value="{{$passport->national_id}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Passport</label>
              <input type="text" name="passport" class="form-control" value="{{$passport->passport}}">
            </div>
          </div>
          
<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Client Image</label>
              <input type="file" class="form-control" name="client_image" value="{{$passport->client_image}}">
            </div>
          </div>
		  
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->client_image}}" height="100" width="100">
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
  