@extends('faru.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')

<div class="container">
  <h2>Image Gallery</h2>

  <div class="row">
  @foreach($gallery as $passport)
  
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image1}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip1}}</p>
            
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image2}}" alt="Nature" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip2}}</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image3}}" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip3}}</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
    <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image4}}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip4}}</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image5}}" alt="Nature" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip5}}</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="#" target="_blank">
          <img src="{{ url('/') }}/img/{{$passport->image6}}" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>{{$passport->descrip6}}</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection

@section('foot')
    @parent

@endsection