@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->


    <div class="container">
      <h2>Edit Transport</h2><br  />

            <form method="post" 
            action="{{ route('transport.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="transport_id">Transport Id:</label>
            <input type="number" class="form-control" name="transport_id" value="{{$passport->transport_id}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="type_of_transport">Type Of Transport</label>
              <input type="text" name="type_of_transport" class="form-control" value="{{$passport->type_of_transport}}">
            </div>
          </div>

<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Image :</label>
              <input type="file" class="form-control" name="image">
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
            <div class="form-group col-md-4">
              <label for="Email">Description :</label>
              <textarea name="description" class="form-control"></textarea>
              
            </div>
          </div




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
  