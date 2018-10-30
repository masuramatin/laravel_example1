@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->



    <div class="container">
      <h2>Edit About Us</h2><br  />

            <form method="post" action="{{ route('about.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$passport->title}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label>Descripation 1</label>
             <textarea name="descripation1" id="descripation1"  class="form-control">{{$passport->descripation1}}</textarea>
			 
			  
            </div>
          </div>
       
	    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Descripation 2</label>
              <textarea name="descripation2" id="descripation2"  class="form-control">{{$passport->descripation2}}</textarea>
            </div>
          </div>
        

 
			<div class="row">
			  <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Image 1</label>
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
              <label for="number">Image 2</label>
              <input type="file" class="form-control" name="image2" value="{{$passport->image2}}">
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
              <label for="number">Image 3</label>
              <input type="file" class="form-control" name="image3" value="{{$passport->image3}}">
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
  