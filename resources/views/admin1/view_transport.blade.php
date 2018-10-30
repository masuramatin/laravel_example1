@extends('layouts.app')
@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
      <h2>View Transport</h2><hr  />
		<div align="right"><button class="btn btn-warning">Print</button></div>
            <form  
  action="{{ route('transport.view', $id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="transport_id">Transport Id:</label>
            {{$passport->transport_id}}
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="type_of_transport">Type Of Transport</label>
              {{$passport->type_of_transport}}
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
  