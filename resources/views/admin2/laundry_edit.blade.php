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
      <h2>Edit Laundry Order</h2><br  />

            <form method="post" 
            action="{{ route('laundry.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">order_date:</label>
            <input type="date" class="form-control" name="order_date" id="order_date" value="{{$passport->order_date}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">delivery_date:</label>
              <input type="date" name="delivery_date" class="form-control" value="{{$passport->delivery_date}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">number_of_cloth:</label>
              <input type="number" class="form-control" name="number_of_cloth" id="number_of_cloth" value="{{$passport->number_of_cloth}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>service_charge:</strong>  
            <input class="date form-control"  type="number" id="service_charge" name="service_charge" value="{{$passport->service_charge}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>type_of_washing:</strong>  
            <input class="date form-control"  type="text" id="type_of_washing" name="type_of_washing" value="{{$passport->type_of_washing}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>cloth_type:</strong>  
            <input class="date form-control"  type="text" id="cloth_type" name="cloth_type" value="{{$passport->cloth_type}}">   
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong>comment:</strong>  
            <input class="date form-control"  type="text" id="comment" name="comment" value="{{$passport->comment}}">   
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
    