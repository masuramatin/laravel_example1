@extends('layouts.app')
@section('content')

 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
  <h2>Food</h2>
<div align="right"><a href="{{action('AdminController@food_create')}}" class="btn btn-warning">Add Food</a></div>    
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Food Name</th>
        <th>Description</th>
        <th>Price</th>

        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_food_items as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['food_name']}}</td>
   <td>{{$passport['description']}}</td>
   <td>{{$passport['price']}}</td>
   <td>          
   <a href="{{action('AdminController@edit_food', $passport['id'])}}" class="btn btn-warning">Edit</a>
   |
   <form action="{{ route('food.destroy', $passport['id']) }}" method="get">
            
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
  