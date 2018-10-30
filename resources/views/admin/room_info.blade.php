@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
<div class="container">

  <h2>Room Information</h2>



 <div align="right">
<a href="room_info_create"
 class="btn btn-warning">Add Account</a>
 </div>



  <table class="table table-striped">
    <thead>
      <tr>
        <th>Room No</th>
        <th>Condition</th>
        <th>Room Status</th>
        
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  
  @foreach($k as $passport)
   <tr>
   <td>{{$passport['room_no']}}</td>
   <td>{{$passport['condition']}}</td>
   <td>{{$passport['room_status']}}</td>
     
   <td>          
   
            
          </form>  
      
    </td>
   </tr>
  @endforeach
  </tbody>
  </table> 
</div>
  
 @endif  
@endsection
  