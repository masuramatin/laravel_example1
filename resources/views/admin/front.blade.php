@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 

  <!-- slide start -->

<div class="container">
  <h4  data-toggle="collapse" data-target="#demo1">Manage Slide of Front End</h4>
  <!--<div align="right"><a href="{{action('AdminController@front_create')}}" class="btn btn-warning">Add Slide</a></div>-->
<div id="demo1" class="collapse">
  
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
   <!--|
   <form action="{{ route('front.destroy', $passport['id']) }}" method="get">
            
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
  </div>
  
  <!-- slide end -->
  <hr />
  
  <!-- offer start -->
<div class="container">
  <h4  data-toggle="collapse" data-target="#demo2">Manage Offer of Front End</h4>  
  <div id="demo2" class="collapse">

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
 </div>
 <hr />

   <!-- offer end -->
   <!-- About Start -->
<div class="container">
  <h4  data-toggle="collapse" data-target="#demo3">Manage About Us of Front End</h4>  
  <div id="demo3" class="collapse">  
 
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
		<th>descrip1</th>
        <th>descrip2</th>
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($about as $passport)
   <tr>
   <td>{{$passport['title']}}</td>
   <td>{{$passport['descripation1']}}</td>
   <td>{{$passport['descripation2']}}</td>   
   <td>{{$passport['image1']}}</td>
   <td>{{$passport['image2']}}</td>
   <td>{{$passport['image3']}}</td>      
   <td>          
   <a href="{{action('AdminController@edit_about', $passport['id'])}}" class="btn btn-warning">Edit</a>
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
 </div>
 <hr />


 </div> 
 </div>
   
   <!-- About End -->
 <hr />
  
   <!-- Gallery Start -->
<div class="container">
  <h4  data-toggle="collapse" data-target="#demo4">Manage Gallery of Front End</h4>  
  <div id="demo4" class="collapse">
    
<table class="table table-striped">
    <thead>
      <tr>
        
		<th>Descrip1</th>
        <th>descrip2</th>
        <th>Descrip3</th>
        <th>descrip4</th>
        <th>Descrip5</th>
        <th>descrip6</th>
        
        <th>Image1</th>
        <th>Image2</th>
        <th>Image3</th>
        <th>Image4</th>
        <th>Image5</th>
        <th>Image6</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($gallery as $passport)
   <tr>
   
   <td>{{$passport['descrip1']}}</td>
   <td>{{$passport['descrip2']}}</td>
   <td>{{$passport['descrip3']}}</td>
   <td>{{$passport['descrip4']}}</td>
   <td>{{$passport['descrip5']}}</td>
   <td>{{$passport['descrip6']}}</td>
   
      
   <td>{{$passport['image1']}}</td>
   <td>{{$passport['image2']}}</td>
   <td>{{$passport['image3']}}</td> 
   <td>{{$passport['image4']}}</td>
   <td>{{$passport['image5']}}</td>
   <td>{{$passport['image6']}}</td>      
   <td>          
   <a href="{{action('AdminController@edit_gallery', $passport['id'])}}" class="btn btn-warning">Edit</a>
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
 </div>
  
 <hr />
  
   <!-- Gallery End -->   	   	 
 @endif  
@endsection
  