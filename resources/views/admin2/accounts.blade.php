@extends('layouts.app')


@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else
  <h2>Accounts</h2><table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Expenses </th>
        <th>Revenue</th>
         <th>Description</th>
        <th>Amount</th>
         <th>Date</th>
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($accounts as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['expenses ']}}</td>
   <td>{{$passport['revenue']}}</td>
    <td>{{$passport['description']}}</td>
     <td>{{$passport['amount']}}</td>
      <td>{{$passport['date']}}</td>
   
   
      
   <td>          
   <a href="" class="btn btn-warning">Edit</a>
   <a href="" class="btn btn-warning">Delete</a>       
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
  