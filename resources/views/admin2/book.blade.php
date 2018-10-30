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
  <h2>Booking</h2>
<div align="right"><a href="{{action('AdminController@adminbooking_create')}}" class="btn btn-warning">Add Booking</a></div>  
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Client Id</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Room Number</th>
        <th>Room Type</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($book as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['check_in']}}</td>
   <td>{{$passport['check_out']}}</td>
   
   <td>{{$passport['room_num']}}</td>
   <td>{{$passport['room_type']}}</td>
   
      
   <td>          
   <a href="{{action('AdminController@edit_book', $passport['id'])}}" class="btn btn-warning">Edit</a>
  
 
   <form action="{{ route('book.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>        
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
 </div>  
 @endif  
@endsection
@section('foot')
    @parent

@endsection


  






