@extends('layouts.app')
@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
  <h2>Slide</h2>
  <div align="right"><a href="{{action('AdminController@front_create')}}" class="btn btn-warning">Add Booking</a></div>
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title1</th>
        <th>Title2</th>
        <th>Title3</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($slide as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['title1']}}</td>
   <td>{{$passport['title2']}}</td>
   <td>{{$passport['title3']}}</td>
   
   <td>{{$passport['image1']}}</td>
   <td>{{$passport['image2']}}</td>
   <td>{{$passport['image3']}}</td>
      
   <td>          
   <a href="{{action('AdminController@edit_front', $passport['id'])}}" class="btn btn-warning">Edit</a>
   |
   <form action="{{ route('front.destroy', $passport['id']) }}" method="get">
            
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
  