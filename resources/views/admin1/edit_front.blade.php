@extends('layouts.app')
@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
      <h2>Edit Slide</h2><br  />

            <form method="post" 
            action="{{ route('front.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title1">Title 1:</label>
            <input type="text" class="form-control" name="title1" value="{{$passport->title1}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title2">Title 2:</label>
            <input type="text" class="form-control" name="title2" value="{{$passport->title2}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title3">Title 1:</label>
            <input type="text" class="form-control" name="title3" value="{{$passport->title3}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="image1">Image 1:</label>
            <input type="text" class="form-control" name="image1" value="{{$passport->image1}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="image2">Image 2:</label>
            <input type="text" class="form-control" name="image2" value="{{$passport->image2}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="image3">Image 3:</label>
            <input type="text" class="form-control" name="image3" value="{{$passport->image3}}">
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
     </div>  
 @endif 
@endsection


@section('foot')
    @parent

@endsection
  