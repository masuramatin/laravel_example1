@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->


    <div class="container">
      <h2>View Transport</h2><hr  />
		<div align="right"><button class="btn btn-warning">Print</button></div>
            <form  
  action="{{ route('transport.view', $id) }}" method="post" enctype="multipart/form-data" class="form-horizontal">
          
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
         <table class="table table-striped">
      <tr>
        
        <th>Transport Id</th>
        <th>Type of Transport</th>
        <th>Image</th>
        <th>Description</th>
        </tr>     
        <tr>
   <td>{{$passport['transport_id']}}</td>
   <td>{{$passport['type_of_transport']}}</td>
   <td>{{$passport['image']}}</td>
   <td>{{$passport['description']}}</td>
   </tr>
        
        
        
        
        
      </form>
    </div>
</table>
    <hr />
@endif  

@endsection
  