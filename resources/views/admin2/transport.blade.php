@extends('layouts.app')


@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else
  <h2>Transport</h2>
<div align="right"><a href="{{action('AdminController@transport_create')}}" class="btn btn-warning">Add Transport</a></div>  
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Transport Id</th>
        <th>Type of Transport</th>
        
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($transport as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['transport_id']}}</td>
   <td>{{$passport['type_of_transport']}}</td>
   
   
      
   <td> 
   
      <a href="{{action('AdminController@view_transport', $passport['id'])}}" class="btn btn-warning">View</a>
      
      <a href="{{action('AdminController@edit_transport', $passport['id'])}}" class="btn btn-warning">Edit</a>
         

 
   <form action="{{ route('transport.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>        
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  
    @endif 
@endsection


@section('foot')
    @parent

@endsection
