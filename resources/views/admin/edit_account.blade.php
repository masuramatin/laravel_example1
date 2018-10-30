@extends('layouts.app')
@section('content')

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

                        @else 
    <div class="container">
      <h2>Edit Account</h2><br  />

            <form method="post" 
            action="{{ route('account.update', $id) }}"  enctype="multipart/form-data" class="form-horizontal">
            
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">     
        
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="expenses">Expenses: </label>
            	<select name="expenses" id="expenses" class="form-control">
                	<option value="{{$passport->expenses}}">{{$passport->expenses}}</option>
                	<option value="Expense">Expense</option>
                	<option value="Revenue">Revenue</option>
                    
                </select>            

          </div>
        </div>
        <!--
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="revenue">Revenue</label>
              <input type="text" name="revenue" class="form-control" value="{{$passport->revenue}}">
            </div>
          </div>
          -->
		   <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">Description</label>
              <input type="text" name="description" class="form-control" value="{{$passport->description}}">
            </div>
          </div>
		  <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="amount">amount</label>
              <input type="number" name="amount" class="form-control" value="{{$passport->amount}}">
            </div>
          </div>
		  <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="date">date</label>
              <input type="date" name="date" class="form-control" value="{{$passport->date1}}">
            </div>
          </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  
 @endif  
@endsection