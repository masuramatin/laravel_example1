@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

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
<div class="container">
  <h2>Account</h2>
  
<div  id='divToPrint'> 

 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Type</th>
         <th>Description</th>
        <th>Amount</th>
         <th>Date</th>
       
      </tr>
    </thead>
    <tbody>  
	
  @foreach($account as $passport)
   <tr>
   <td>{{$passport['expenses']}}</td>
    <td>{{$passport['description']}}</td>
     <td>{{$passport['amount']}}</td>
      <td>{{$passport['date1']}}</td>

   </tr>
  @endforeach
  </tbody>
  </table> 

<div class="container">
	<div class="row">
    	<div class="col-md-6">
        	<h2>End Of The Year</h2>
        	<h4>Total Expense: {!! $expenses !!}</h4>
        	<h4>Total Revenue: {!! $revenue !!}</h4>
        	<h4>_______________</h4>
        	<h4>Profit/Loss: {!! $expenses - $revenue !!}</h4>
            
        </div>
    </div>

</div>
</div>  
 @endif  
@endsection
  