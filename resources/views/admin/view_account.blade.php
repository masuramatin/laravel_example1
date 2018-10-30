@extends('layouts.app')
@section('content')
<!--session start ========-->
 @if (Auth::guest())
    <div align="center"><h2> <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
<!--session end ========-->
    <div class="container">
      <h2>View Accounts</h2><hr  />
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
<div  id='divToPrint'> 
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="expenses">Type:</label>
            {{$passport->expenses}}
          </div>
        </div>
		

		  
		   <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description</label>
              {{$passport->description}}
            </div>
          </div>

		    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="amount">amount</label>
              {{$passport->amount}}
            </div>
          </div>
		  
		    <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">date</label>
              {{$passport->date1}}
            </div>
          </div>

</div>        
    </div>
    <hr />
@endif  

@endsection
  