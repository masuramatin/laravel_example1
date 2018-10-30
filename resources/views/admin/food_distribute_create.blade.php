@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 

<meta name="_token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#food_item1').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost1').val(data);
					var bt = $('#bati1').val();
					var tot1 = bt*data;
					$('#tot1').val(tot1);

				}
			});			
		});

    $('#bati1').keyup(function(){
		$value=$('#food_item1').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost1').val(data);
					var bt = $('#bati1').val();
					var tot1 = bt*data;
					$('#tot1').val(tot1);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot1);
					$('#total').html(sum);					
				}
			});		    
		});
    
});
</script>
<script>
$(document).ready(function(){
    $('#food_item2').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost2').val(data);
				}
			});			
		});

    $('#bati2').keyup(function(){
		$value=$('#food_item2').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost2').val(data);
					var bt = $('#bati2').val();
					var tot2 = bt*data;
					$('#tot2').val(tot2);

					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot2);
					$('#total').html(sum);				
				}
			});		    
		});
		    
});
</script>  

<script>
$(document).ready(function(){
    $('#food_item3').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost3').val(data);
				}
			});			
		});
$('#bati3').keyup(function(){
		$value=$('#food_item3').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost3').val(data);
					var bt = $('#bati3').val();
					var tot3 = bt*data;
					$('#tot3').val(tot3);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot3);
					$('#total').html(sum);					
				}
			});		    
		});        
});
</script> 

<script>
$(document).ready(function(){
    $('#food_item4').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost4').val(data);
				}
			});			
		});
$('#bati4').keyup(function(){
		$value=$('#food_item4').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost4').val(data);
					var bt = $('#bati4').val();
					var tot4 = bt*data;
					$('#tot4').val(tot4);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot4);
					$('#total').html(sum);		
				}
			});		    
		});        
});
</script> 
<script>
$(document).ready(function(){
    $('#food_item5').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost5').val(data);
				}
			});			
		});
 $('#bati5').keyup(function(){
		$value=$('#food_item5').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost5').val(data);
					var bt = $('#bati5').val();
					var tot5 = bt*data;
					$('#tot5').val(tot5);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot5);
					$('#total').html(sum);		
				}
			});		    
		}); 
    
});
</script> 

<script>
$(document).ready(function(){
    $('#food_item6').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost6').val(data);
				}
			});			
		});
 $('#bati6').keyup(function(){
		$value=$('#food_item6').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost6').val(data);
					var bt = $('#bati6').val();
					var tot6 = bt*data;
					$('#tot6').val(tot6);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot6);
					$('#total').html(sum);		
				}
			});		    
		}); 
    
    
});
</script> 

<script>
$(document).ready(function(){
    $('#food_item7').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost7').val(data);
				}
			});			
		});
   $('#bati7').keyup(function(){
		$value=$('#food_item7').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost7').val(data);
					var bt = $('#bati7').val();
					var tot7 = bt*data;
					$('#tot7').val(tot7);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot7);
					$('#total').html(sum);		
				}
			});		    
		}); 
      
});
</script>

 <script>
$(document).ready(function(){
    $('#food_item8').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost8').val(data);
				}
			});			
		});
   $('#bati8').keyup(function(){
		$value=$('#food_item8').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost8').val(data);
					var bt = $('#bati8').val();
					var tot8 = bt*data;
					$('#tot8').val(tot8);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot8);
					$('#total').html(sum);		
				}
			});		    
		}); 

});
</script> 

<script>
$(document).ready(function(){
    $('#food_item9').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost9').val(data);
				}
			});			
		});
   $('#bati9').keyup(function(){
		$value=$('#food_item9').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost9').val(data);
					var bt = $('#bati9').val();
					var tot9 = bt*data;
					$('#tot9').val(tot9);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot9);
					$('#total').html(sum);		
				}
			});		    
		}); 
    
});
</script> 
<script>
$(document).ready(function(){
    $('#food_item10').change(function(){
		$value=$(this).val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost10').val(data);
				}
			});			
		});
   $('#bati10').keyup(function(){
		$value=$('#food_item10').val();
			
			$.ajax({
					type : 'get',
					url : '{{URL::to("search_food1")}}',
					data:{'search':$value},
					success:function(data){
					$('#cost10').val(data);
					var bt = $('#bati10').val();
					var tot10 = bt*data;
					$('#tot10').val(tot10);
					var total = $('#total').html();
					var sum = parseInt(total)+parseInt(tot10);
					$('#total').html(sum);		
				}
			});		    
		}); 
    
});
</script> 

  <body>
    <div class="container">
      <hr/><h2>Add Food Distributes</h2><hr/>

      <form method="post" action="{{url('fooddistributeupdate')}}" enctype="multipart/form-data">
  {{ csrf_field() }}     
        <div class="row">
            <div class="col-md-2"></div>
              <div class="form-group col-md-4">
                <label for="client_id">Client ID:</label>
                <select class="form-control" name="client_id" id="client_id">
         		
			
		             
                 <option value="">Select Client ID </option>
                 @foreach($exis_client as $passport)
                 <option value="{{$passport->client_id }}">{{$passport->client_id }} </option>
                 @endforeach  

                </select> 
              </div>
        </div>
        
        
        <div class="row">
          <div class="col-md-2"></div>
            <div class="form-group col-md-5">
              <label for="room_no">Room No:</label>
              <select class="form-control" name="room_no" id="room_no">
                 <option value="">Select Room No </option>
                 
  				 @foreach($room as $passport)
                 <option value="{{$passport->room_no}}">{{$passport->room_no}}</option>
                 @endforeach                  
                </select>
            </div>
        </div>

		<div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item1">Food Item1:</label>
               <select class="form-control" name="food_item1" id="food_item1">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
             
            </div>
            <div class="form-group col-md-2">
              <label for="cost1">Cost:</label>
              <input type="number" class="form-control" name="cost1" id="cost1">
            </div>
            <div class="form-group col-md-1">
              <label for="bati1">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati1" id="bati1"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati1">Total:</label>
              <input type="text" class="form-control" name="tot1" id="tot1"> 
            </div>                                    
         </div>
         
		<div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item2">Food Item2:</label>
               <select class="form-control" name="food_item2" id="food_item2">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost2">Cost:</label>
              <input type="number" class="form-control" name="cost2" id="cost2">
            </div> 
            <div class="form-group col-md-1">
              <label for="bati1">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati2" id="bati2"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati1">Total:</label>
              <input type="text" class="form-control" name="tot2" id="tot2"> 
            </div>                       
         </div>
         
         <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item3">Food Item3:</label>
               <select class="form-control" name="food_item3" id="food_item3">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost3">Cost:</label>
              <input type="number" class="form-control" name="cost3" id="cost3">
              
            </div> 
            <div class="form-group col-md-1">
              <label for="bati1">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati3" id="bati3"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati3">Total:</label>
              <input type="text" class="form-control" name="tot3" id="tot3"> 
            </div>                                    
         </div>
          
                <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item4">Food Item4:</label>
               <select class="form-control" name="food_item4" id="food_item4">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost4">Cost:</label>
              <input type="number" class="form-control" name="cost4" id="cost4">
            </div>  
            <div class="form-group col-md-1">
              <label for="bati1">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati4" id="bati4"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati4">Total:</label>
              <input type="text" class="form-control" name="tot4" id="tot4"> 
            </div>                          
         </div>
            <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item5">Food Item5:</label>
               <select class="form-control" name="food_item5" id="food_item5">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>

            </div>
            <div class="form-group col-md-2">
              <label for="cost5">Cost:</label>
              <input type="number" class="form-control" name="cost5" id="cost5">
            </div>
            <div class="form-group col-md-1">
              <label for="bati5">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati5" id="bati5"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati5">Total:</label>
              <input type="text" class="form-control" name="tot5" id="tot5"> 
            </div>                                    
         </div>
         
               <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item6">Food Item6:</label>
               <select class="form-control" name="food_item6" id="food_item6">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>

            </div>
            <div class="form-group col-md-2">
              <label for="cost6">Cost:</label>
              <input type="number" class="form-control" name="cost6" id="cost6">
            </div> 
            <div class="form-group col-md-1">
              <label for="bati6">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati6" id="bati6"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati6">Total:</label>
              <input type="text" class="form-control" name="tot6" id="tot6"> 
            </div>                              
         </div>
               <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item7">Food Item7:</label>
               <select class="form-control" name="food_item7" id="food_item7">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost7">Cost:</label>
              <input type="number" class="form-control" name="cost7" id="cost7"> 
            </div> 
<div class="form-group col-md-1">
              <label for="bati7">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati7" id="bati7"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati7">Total:</label>
              <input type="text" class="form-control" name="tot7" id="tot7"> 
            </div>                         
         </div>
            <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item8">Food Item8:</label>
               <select class="form-control" name="food_item8" id="food_item8">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost8">Cost:</label>
              <input type="number" class="form-control" name="cost8" id="cost8">
            </div>
 <div class="form-group col-md-1">
              <label for="bati8">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati8" id="bati8"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati8">Total:</label>
              <input type="text" class="form-control" name="tot8" id="tot8"> 
            </div>                       
         </div>
               <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item9">Food Item9:</label>
               <select class="form-control" name="food_item9" id="food_item9">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost9">Cost:</label>
              <input type="number" class="form-control" name="cost9" id="cost9">
            </div> 
   <div class="form-group col-md-1">
              <label for="bati9">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati9" id="bati9"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati9">Total:</label>
              <input type="text" class="form-control" name="tot9" id="tot9"> 
            </div>                     
         </div>
         <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-2">
              <label for="food_item10">Food Item10:</label>
               <select class="form-control" name="food_item10" id="food_item10">
                 <option value="">Select Food Item </option>
  				 @foreach($food_items as $passport)
                 <option value="{{$passport->food_name}}">{{$passport->food_name}}</option>
                 @endforeach 
                </select>
            </div>
            <div class="form-group col-md-2">
              <label for="cost10">Cost:</label>
              <input type="number" class="form-control" name="cost10" id="cost10">
            </div>
 <div class="form-group col-md-1">
              <label for="bati10">Bati/Plate:</label>
              <input type="text" class="form-control" name="bati10" id="bati10"> 
            </div> 
            <div class="form-group col-md-1">
              <label for="bati10">Total:</label>
              <input type="text" class="form-control" name="tot10" id="tot10"> 
            </div>                        
         </div>
        
         <div class="row">
        	<div class="col-md-2"></div>
            <div class="form-group col-md-4">
              <label for="food_item7">Date:</label>
              <input type="date" class="form-control" name="cdate" id="cdate">
            </div>
          </div> 
        <div class="row" align="right">
          <div class="col-md-2"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <b>Total: <span id='total'>0</span></b>
          </div>
        </div>            
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div> 
                                     
       </form>

  
 @endif  
@endsection
  
