@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
{{ $total=0 }}
<!--session end ========-->
<!-- print start -->
<div align="right" style="margin-top:-10px;margin-right:80px;margin-bottom:0px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-success"
  />
</div> 
<script type="text/javascript">     
    function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('', '_blank', 'width=300,height=300');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
            }
</script>

<!-- print end -->
<div  id='divToPrint'> 

<div class="container" align="center">
    <h2>Invoice Details</h2>
    <hr />
	<h3>Blue Sea Hotel</h3>
    <div>123, Chairman Gali, Road NO: 56, Dhaka</div>
    <div>Tel: 420420, Mob: 420420</div>
    <div>Email: info@bluesea.com, Web: www.bluesea.com</div>
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
      	<div class="col-md-12">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $room_no =  $passport->room_no }} 
        		@endsection
            @endforeach
            
    		<p><h4>Room No: {{ $room_no }}</h4></p>
    		<hr />            
         </div>
 	   </div>

 	   <div class="row">        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item1 =  $passport->food_item1 }} 
        		@endsection
            
            @endforeach
            <p>Food Item1: {{ $food_item1 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost1 =  $passport->cost1 }} 
          			{{ $total =  $total+$passport->cost1 }} 
                    
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost1 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati1 =  $passport->bati1 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati1 }}</p>            
            <hr />
         </div>     
 		</div>
 	   <div class="row">        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item2 =  $passport->food_item2 }} 
        		@endsection
            
            @endforeach
            <p>Food Item2: {{ $food_item2 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost2 =  $passport->cost2 }}
          			{{ $total =  $total+$passport->cost2 }} 
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost2 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati2 =  $passport->bati2 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati2 }}</p>            
            <hr />
         </div>     
 		</div> 
        
 	   <div class="row">        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item3 =  $passport->food_item3 }} 
        		@endsection
            
            @endforeach
            <p>Food Item3: {{ $food_item3 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost3 =  $passport->cost3 }} 
          			{{ $total =  $total+$passport->cost3 }} 
                    
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost3 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati3 =  $passport->bati3 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati3 }}</p>            
            <hr />
         </div>     
 		</div> 
        
  	   <div class="row">        
       
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item4 =  $passport->food_item4 }} 
        		@endsection
            
            @endforeach
            <p>Food Item4: {{ $food_item4 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost4 =  $passport->cost4 }}
          			{{ $total =  $total+$passport->cost4 }} 
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost4 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

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
        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item5 =  $passport->food_item5 }} 
        		@endsection
            
            @endforeach
            <p>Food Item5: {{ $food_item5 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost5 =  $passport->cost5 }}
          			{{ $total =  $total+$passport->cost5 }} 
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost5 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati5 =  $passport->bati5 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati5 }}</p>            
            <hr />
         </div>     
 		</div>
 	   <div class="row">        
        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item6 =  $passport->food_item6 }} 
        		@endsection
            
            @endforeach
            <p>Food Item6: {{ $food_item6 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost6 =  $passport->cost6 }}
          			{{ $total =  $total+$passport->cost6 }}
                     
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost6 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati6 =  $passport->bati6 }}
                     
            	@endsection
            @endforeach
            <p>Bati: {{ $bati6 }}</p>            
            <hr />
         </div>     
 		</div> 
        
 	   <div class="row">        
        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item7 =  $passport->food_item7 }}
                 
        		@endsection
            
            @endforeach
            <p>Food Item7: {{ $food_item7 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost7 =  $passport->cost7 }} 
          			{{ $total =  $total+$passport->cost7 }} 
                    
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost7 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati7 =  $passport->bati7 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati7 }}</p>            
            <hr />
         </div>     
 		</div> 
        
 	   <div class="row">        
        
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item8 =  $passport->food_item8 }} 
        		@endsection
            
            @endforeach
            <p>Food Item8: {{ $food_item8 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost8 =  $passport->cost8 }} 
          			{{ $total =  $total+$passport->cost8 }} 
                    
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost8 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati8 =  $passport->bati8 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati8 }}</p>            
            <hr />
         </div>     
 		</div>               
                       
 	   <div class="row">        

      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item9 =  $passport->food_item9 }} 
        		@endsection
            
            @endforeach
            <p>Food Item9: {{ $food_item9 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost9 =  $passport->cost9 }}
          			{{ $total =  $total+$passport->cost9 }} 
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost9 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati9 =  $passport->bati9 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati9 }}</p>            
            <hr />
         </div>     
 		</div> 
        
  	   <div class="row">        
       
      	 <div class="col-md-4">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $food_item10 =  $passport->food_item10 }}
                 
        		@endsection
            
            @endforeach
            <p>Food Item10: {{ $food_item10 }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $cost10 =  $passport->cost10 }}
          			{{ $total =  $total+$passport->cost10 }} 
                     
        		@endsection
            
            @endforeach
            <p>Cost: {{ $cost10 }}</p>
            <hr />
         </div>
      	 <div class="col-md-4">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $bati10 =  $passport->bati10 }} 
            	@endsection
            @endforeach
            <p>Bati: {{ $bati10 }}</p>            
            <hr />
         </div>     
 		</div>
</div>
<hr />       
 
<div class="container" align="center">
      <div class="row">
      	<div class="col-md-9">
        	<h3>Total Cost: {{ $total }}</h3> 
        </div>
       
      </div>  

</div>  
<hr />       
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
</div> 
   @endif  

@endsection