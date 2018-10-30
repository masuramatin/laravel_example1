@extends('faru.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
  	  @foreach($about as $passport)

    <div class="col-sm-8">

      <h2>{{$passport->title}}</h2><br>
      <h4>{{$passport->descripation1}}</h4><br>
      <p>{{$passport->descripation2}}</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
              <p><img src="{{ url('/') }}/img/{{$passport->image1}}" alt="Los Angeles" style="width:100%;"></p>
              <p><img src="{{ url('/') }}/img/{{$passport->image2}}" alt="Chicago" style="width:100%;"></p> 
              <p><img src="{{ url('/') }}/img/{{$passport->image3}}" alt="Chicago" style="width:100%;"></p>                              
    </div>
  </div>
   @endforeach
</div>


@endsection
@section('foot')
    @parent

@endsection