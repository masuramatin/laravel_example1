@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>


                        @else 


 <h2 align="center"> Employee Details Information</h2>
    <hr/>
    <div class="container">
      <div class="row">

       @foreach($emp as $passport)
		<div class="col-md-4">
 	     <div class="thumbnail">
          <img src="{{ url('/') }}/img/{{$passport->image}}" alt="Lights" style="width:100%">
          <div class="caption">
            <h3 align="center"><a href="/">{{$passport->name}}</a></h3>
           
          </div>
      </div>
    </div>

    @endforeach 
      {{ $emp->links() }}

 </div>





<div class="container">
  <h2>Employee</h2>
  <div align="right"><a href="{{action('AdminController@employee_create')}}" class="btn btn-warning">Add Employee</a></div>   
   <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Designation</th>
         
        <th>Address</th>
          <th>Contact No</th>
        <th>Email</th>

          
        <th>Image</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($emp as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['name']}}</td>
   <td>{{$passport['designation']}}</td>
    
   <td>{{$passport['address']}}</td>
    <td>{{$passport['contrct_no']}}</td>
   <td>{{$passport['email']}}</td>

    
   <td>
          <img src="{{ url('/') }}/img/{{$passport['image']}}" alt="Lights" height="100px" width="100px">
   
   </td>
   <td>          
   <a href="{{action('AdminController@edit_employee', $passport['id'])}}" class="btn btn-warning">Edit</a>
   <form action="{{ route('employee.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>      
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  {{ $emp->links() }}
  </div>
 @endif  
@endsection