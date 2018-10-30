@extends('layouts.app')


@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
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

    
   <td>{{$passport['image']}}</td>
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
  @endif 
  
@endsection


@section('foot')
    @parent

@endsection
  