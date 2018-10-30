@extends('admin.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="container">
      <h2>Edit Enquiry Item</h2><br  />

            <form method="post" 
            action="{{ route('enquiry.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
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
              <label for="number">Phone</label>
              <input type="number" name="phone" class="form-control" value= "{{$passport->phone}}" />
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">email:</label>
              <input type="email" class="form-control" name="email" value="{{$passport->email}}">
            </div>
          </div>
                <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="message">Message</label>
              <textarea name="message" class="form-control">{{$passport->message}}</textarea>
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
  