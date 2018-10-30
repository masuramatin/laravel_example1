@extends('layouts.app')
@section('content')

 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 


<div class="container">
  <h2>Enquiry</h2>
  <div align="right"><a href="{{action('AdminController@enquiry_create')}}" class="btn btn-warning">Add Enquiry</a></div>    

  
  
    <table class="table table-striped">

  <thead>
      <tr>
        <th>ID</th>
        <th>Name </th>
        <th>Phone</th>
         <th>Email</th>
        <th>Message</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($enq as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['name']}}</td>
   <td>{{$passport['phone']}}</td>
    <td>{{$passport['email']}}</td>
     <td>{{$passport['message']}}</td>
   
   
      
   <td>          
   <a href="{{action('AdminController@edit_enquiry', $passport['id'])}}" class="btn btn-warning">Edit</a>
   |
   <form action="{{ route('enquiry.destroy', $passport['id']) }}" method="get">
            
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
  