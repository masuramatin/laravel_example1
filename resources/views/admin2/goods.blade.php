@extends('layouts.app')


@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
 @if (Auth::guest())
    <div align="center"><h2>     <a href="{{ route('login') }}">Please Login</a></h2></div>

@else 
  <h2>Goods</h2>
<div align="right"><a href="{{action('AdminController@goods_create')}}" class="btn btn-warning">Add Goods</a></div>  
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Name </th>
        <th>Num Of Item</th>

          <th>Receive Date</th>
       
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>  
  @foreach($hm_cleaning_supp as $passport)
   <tr>
   <td>{{$passport['item_name']}}</td>
   <td>{{$passport['num_of_item']}}</td>

   <td>{{$passport['receive_date']}}</td>   
      
   <td>          
    <a href="{{action('AdminController@edit_goods', $passport['id'])}}" class="btn btn-warning">Edit</a>
  
 
   <form action="{{ route('goods.destroy', $passport['id']) }}" method="get">
            
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>     
    </td>
   
   </tr>
  @endforeach
  </tbody>
  </table> 
  
 @endif   
@endsection


@section('foot')
    @parent

@endsection
  