@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->



    <div class="container">
      <h2>Edit Gallery</h2><br  />

            <form method="post" action="{{ route('gallery.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description1:</label>
            <input type="text" class="form-control" name="descrip1" value="{{$passport->descrip1}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description2:</label>
            <input type="text" class="form-control" name="descrip2" value="{{$passport->descrip2}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description3:</label>
            <input type="text" class="form-control" name="descrip3" value="{{$passport->descrip3}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description4:</label>
            <input type="text" class="form-control" name="descrip4" value="{{$passport->descrip4}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description5:</label>
            <input type="text" class="form-control" name="descrip5" value="{{$passport->descrip5}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Description6:</label>
            <input type="text" class="form-control" name="descrip6" value="{{$passport->descrip6}}">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image1:</label>
            <input type="file" class="form-control" name="image1" value="{{$passport->image1}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image1}}" height="100" width="100">
          </div>
        </div>
        
        
        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image2:</label>
            <input type="file" class="form-control" name="image2" value="{{$passport->image2}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image2}}" height="100" width="100">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image3:</label>
            <input type="file" class="form-control" name="image3" value="{{$passport->image3}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image3}}" height="100" width="100">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image4:</label>
            <input type="file" class="form-control" name="image4" value="{{$passport->image4}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image4}}" height="100" width="100">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image5:</label>
            <input type="file" class="form-control" name="image5" value="{{$passport->image5}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image5}}" height="100" width="100">
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image6:</label>
            <input type="file" class="form-control" name="image6" value="{{$passport->image6}}">
          </div>
        </div>
        
        
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->image6}}" height="100" width="100">
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Edit</button>
          </div>
        </div>
        
        
      </form>
    </div>
    
@endsection


@section('foot')
    @parent
 @endif  

@endsection
  