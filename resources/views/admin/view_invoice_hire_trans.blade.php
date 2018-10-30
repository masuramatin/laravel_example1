@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else

<!-- print start -->

<div align="right" style="margin-top:-10px;margin-top:-10px;margin-right:80px;padding:0px;">
  <input type="button" value="print" onclick="PrintDiv();" 
  class="btn btn-success" id="print"
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
<!--session end ========-->
<div  id='divToPrint'> 
<div class="container" align="center">
    <h2>Invoice Details</h2>
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
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $hire_date =  $passport->hire_date }} 
        		@endsection
            @endforeach
            
    		<p>Hire Date: {{ $hire_date }}</p>
    		<hr />            
         </div>
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $transport_id =  $passport->transport_id }} 
        		@endsection
            
            @endforeach
            <p>Transport Id: {{ $transport_id }}</p>
            <hr /> 
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $location =  $passport->location }} 
        		@endsection
            
            @endforeach
            <p>Location: {{ $location }}</p>
            <hr />
         </div>
      	 <div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
                	{{ $cost =  $passport->cost }} 
            	@endsection
            @endforeach
            <p>Cost: {{ $cost }}</p>
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
</div>  
   @endif  

@endsection