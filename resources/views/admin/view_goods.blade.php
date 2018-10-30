@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->

    <div class="container" >
      <h2>View Goods</h2><hr  />

<!-- print start -->

<div align="right" style="margin-top:-10px;margin-bottom:10px;margin-right:80px;padding:0px;">
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
<div  id='divToPrint'>  
	<div class="row"> 
    	<div class="col-md-12">        
		   <table class="table table-striped">
      <tr>
        	<th>Item Name </th>
			<th>Descripation</th>
        	<th>Num Of Item</th>
            <th>Receive Date</th>
            <th>Image</th>  
		  
		</tr>	
		            
			<tr>
   			    <td>{{$passport['item_name']}}</td>
		 		<td>{{$passport['descripation']}}</td>
         		<td>{{$passport['num_of_item']}}</td>
         		<td>{{$passport['receive_date']}}</td>   
        		 <td>{{$passport['goods_image']}}</td>    
 
            </tr>
        
</table>
		</div>
	</div>
</div>
    </div>
    <hr />
@endif  

@endsection
  