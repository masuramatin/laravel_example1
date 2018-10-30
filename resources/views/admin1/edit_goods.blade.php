@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
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
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Edit</button>
          </div>
        </div>
      </form>
    </div>
@endsection


@section('foot')
    @parent

@endsection
  