@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->



    <div class="container">
      <h2>Edit Goods Item</h2><br  />

            <form method="post" 
            action="{{ route('goods.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Item Name:</label>
            <input type="text" class="form-control" name="item_name" value="{{$passport->item_name}}">
          </div>
        </div>
		
		
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Descripation:</label>
            <input type="text" class="form-control" name="descripation" value="{{$passport->descripation}}">
          </div>
        </div>
		
		
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Number Of Items</label>
              <input type="number" name="num_of_item" class="form-control" value="{{$passport->num_of_item}}">
            </div>
          </div>
        
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Reciving Date</label>
              <input type="date" class="form-control" name="receive_date" value="{{$passport->receive_date}}">
            </div>
          </div>
        
<div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Goods Image</label>
              <input type="file" class="form-control" name="goods_image" value="{{$passport->goods_image}}">
            </div>
          </div>
		  
		  <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <!--<label for="title1">Title 1:</label>-->
            <img src="{{ url('/') }}/img/{{$passport->goods_image}}" height="100" width="100">
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
 @endif  

@endsection
  