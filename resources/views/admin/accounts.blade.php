@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
<div class="container">

  <h2>Account</h2>
<div >
    <div style="float:right;padding-left:10px;">
    <a href="{{action('AdminController@account_create')}}"
     class="btn btn-warning">Add Account</a>
    </div>
    <div style="float:right">
    <a href="{{action('AdminController@account_print')}}"
     class="btn btn-warning">Print</a>
    </div>    
</div>
 
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Type</th>
         <th>Description</th>
        <th>Amount</th>
         <th>Date</th>
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
	
  @foreach($account as $passport)
   <tr>
   <td>{{$passport['expenses']}}</td>
    <td>{{$passport['description']}}</td>
     <td>{{$passport['amount']}}</td>
      <td>{{$passport['date1']}}</td>
   <td>          
   <a href="{{action('AdminController@view_account', $passport['id'])}}" 
	  class="btn btn-warning">View</a> |
	  
      <a href="{{action('AdminController@edit_account', $passport['id'])}}"
	  class="btn btn-warning">Edit</a> |

	  
 <form action="{{ route('account.destroy', $passport['id']) }}"method="get">           
   <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>  
		  
    </td>
   </tr>
  @endforeach
  </tbody>
  </table> 
  {{ $account->links() }}
</div>

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
  
 @endif  
@endsection
  