@extends('layouts.app')
@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
  <h2>Laundry</h2>
<div align="right"><a href="{{action('AdminController@laundry_create')}}" class="btn btn-warning">Add Laundry</a></div>  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Client ID</th>
        <th>Order Date</th>
        <th>Delivery Date</th>
        <th>Number of Cloth</th>

       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_laundry as $passport)
   <tr>
   <td>{{$passport['client_id']}}</td>
   <td>{{$passport['order_date']}}</td>
   <td>{{$passport['delivery_date']}}</td>
   <td>{{$passport['number_of_cloth']}}</td>
     
   <td>          
   <a href="{{action('AdminController@edit_laundry', $passport['id'])}}" class="btn btn-warning" class="btn btn-warning">Edit</a>
   <form action="{{ route('laundry.destroy', $passport['id']) }}" method="get">
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
  