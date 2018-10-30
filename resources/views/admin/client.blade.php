@extends('layouts.app')
@section('content')
<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
	document.getElementById("msg").innerHTML = msg;
  }
</script>
    <div class="container">
   <h2>Clients</h2>
 
<div align="right"><a href="{{action('AdminController@client_create')}}" class="btn btn-warning">Add Client</a></div>    
   <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
         <th>Contact</th>
        <th>National ID:</th>
         <th>Passport</th>
         <th>Client Image</th>
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($guest as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['name']}}</td>
   <td>{{$passport['address']}}</td>
    <td>{{$passport['contact']}}</td>
     <td>{{$passport['national_id']}}</td>
      <td>{{$passport['passport']}}</td>
       <td>
            <img src="{{ url('/') }}/img/{{$passport->client_image}}" height="100" width="100">       
       </td>
   
   
      
   <td>          
   <a href="{{action('AdminController@edit_client', $passport['id'])}}" class="btn btn-warning">Edit</a>
   <form action="{{ route('client.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>     </td>
   
   </tr>
  @endforeach
  </tbody>
  </table>
 {{ $guest->links()}} 
</div>  
@endsection

  