@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
    <div class="container">

  <h2>Offer</h2>
  <hr/>
  <!--<div align="right"><a href="{{action('AdminController@offer_create')}}" class="btn btn-warning">Add Offer</a></div> --->
<table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title1</th>
        <th>Title2</th>
        <th>Title3</th>
		<th>descrip1</th>
        <th>descrip2</th>
        <th>descrip3</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($offer as $passport)
   <tr>
   <td>{{$passport['id']}}</td>
   <td>{{$passport['title1']}}</td>
   <td>{{$passport['title2']}}</td>
   <td>{{$passport['title3']}}</td>
   <td>{{$passport['descripation1']}}</td>
   <td>{{$passport['descripation2']}}</td>
   <td>{{$passport['descripation3']}}</td>
   
   
   <td>{{$passport['image1']}}</td>
   <td>{{$passport['image2']}}</td>
   <td>{{$passport['image3']}}</td>
      
   <td>          
   <a href="{{action('AdminController@edit_offer', $passport['id'])}}" class="btn btn-warning">Edit</a>
   <!--|
   <form action="{{ route('offer.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form> 
    -->            
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table>  
 </div>
   @endif  

@endsection
