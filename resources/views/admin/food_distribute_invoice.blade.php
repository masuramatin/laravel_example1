@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
<div class="container" align="center">
    <h2>Invoice Details</h2>
	<h3>Blue Sea Hotel</h3>
    <p>123, Chairman Gali, Road NO: 56, Dhaka</p>
    <p>Tel: 420420, Mob: 420420</p>
    <p>Email: info@bluesea.com, Web: www.bluesea.com</p>
    

</div> 
<div class="container">
    
    <hr />
      <div class="row">
        <div class="col-md-4">
            @foreach($products as $passport)
                @section('someSection')
                    {{ $client_id =  $passport->client_id }} 
                @endsection
            @endforeach
            <p><h4>Client ID: {{ $client_id }}</h4></p>
            <hr />            
         </div>
       </div>    
      <div class="row">
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $room_no =  $passport->room_no }} 
        		@endsection
            @endforeach
            
    		<p>Room No: {{ $room_no }}</p>
    		<hr />            
         </div>
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item1 =  $passport->food_item1 }} 
        		@endsection
            
            @endforeach
            <p>Food Item1: {{ $food_item1 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost1 =  $passport->cost1 }} 
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost1 }}</p>
            <hr />
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati1 =  $passport->bati1 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati1 }}</p>            
            <hr />
         </div>     
 		</div>
        
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item2 =  $passport->food_item2 }} 
        		@endsection
            
            @endforeach
            <p>Food Item2: {{ $food_item2 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost2 =  $passport->cost2 }} 
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost2 }}</p>
            <hr />
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati2 =  $passport->bati2 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati2 }}</p>            
            <hr />
         </div>     
 		</div> 
        
        
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item3 =  $passport->food_item3 }} 
        		@endsection
            
            @endforeach
            <p>Food Item3: {{ $food_item3 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost3 =  $passport->cost3 }} 
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost3 }}</p>
            <hr />
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati3 =  $passport->bati3 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati3 }}</p>            
            <hr />
         </div>     
 		</div> 
        
        
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item4 =  $passport->food_item4 }} 
        		@endsection
            
            @endforeach
            <p>Food Item4: {{ $food_item4 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost4 =  $passport->cost4 }} 
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost4 }}</p>
            <hr />
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati4 =  $passport->bati4 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati4 }}</p>            
            <hr />
         </div>     
 		</div>               
         
      <div class="row">
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $type_of_washing =  $passport->type_of_washing }} 
        		@endsection
            @endforeach
            
    		<p>Type Of Wash: {{ $type_of_washing }}</p>
    		<hr />            
         </div>
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cloth_type =  
                    $passport->cloth_type }} 
        		@endsection
            @endforeach
            
    		<p>Cloth Type: {{ $cloth_type }}</p>
    		<hr />            
         </div>         
       </div>
      <div class="row">
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $comment =  
                    $passport->comment }} 
        		@endsection
            @endforeach
            
    		<p>Cloth Type: {{ $comment }}</p>
    		<hr />          
        </div>
      </div>           
<div class="container">
      <div class="row">
      	<div class="col-md-9">
        	Date: <?php print date('d-m-y'); ?> 
        </div>
      	<div class="col-md-3" >
        	Signature: _________
        </div>        
      </div>  

</div>  
   @endif  

@endsection