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
      	<div class="col-md-3">

            @foreach($products as $passport)
            	@section('someSection')
          			{{ $client_date =  $passport->client_date }} 
        		@endsection
            @endforeach
            
    		<p>Checkin Date: {{ $client_date }}</p>
    		<hr />            
         </div>
      	 <div class="col-md-3">
            @foreach($products as $passport)
            	@section('someSection')
          		{{ $checkout_date =  $passport->checkout_date }} 
        		@endsection
            
            @endforeach
            <p>Checkout Date: {{ $checkout_date }}</p>
            <hr /> 
         </div>
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
                	{{ $client_total =  $passport->client_total }} 
            	@endsection
            @endforeach
            <p>Total Payment: {{ $client_total }}</p>
            <hr />
         </div>     
 		</div>   
    <div align="center"><b>Payment Details</b></div> 

    <table class="table table-striped">
    	<tr>
        	<th>ID</th>
        	<th>Paid</th>
        	<th>Due</th>
        	<th>Date</th>
        </tr>
    	@foreach($products as $key=>$passport)
        
    	<tr>
        	<td>{{ ++$key }}</td>
        
        	<td>{{ $passport->client_pay }}</td>
        	<td>{{ $passport->client_due }}</td>
        	<td>{{ $passport->created_at }}</td>
        </tr> 
        
    	@endforeach
               
    </table>         
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