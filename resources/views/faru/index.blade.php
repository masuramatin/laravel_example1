@extends('faru.app')

@section('title', 'Hotel Management')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    


<!-- slide start -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
  
  @foreach($slide as $passport)
	
  	
      <div class="item active">
<img src="{{ url('/') }}/img/{{$passport->image1}}" alt="Los Angeles" style="width:100%;">      
        
      </div>

      <div class="item">
<img src="{{ url('/') }}/img/{{$passport->image2}}" alt="Los Angeles" style="width:100%;"> 
      </div>
    
      <div class="item">
<img src="{{ url('/') }}/img/{{$passport->image3}}" alt="Los Angeles" style="width:100%;"> 
      </div>
      @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- slider end -->
<hr />

<!-- Service -->
<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>We Offer</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    @foreach($offer as $passport)
	
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="{{ url('/') }}/img/{{$passport->image1}}" alt="Paris" width="400" height="300">
        <p><strong>{{$passport->title1}}</strong></p>
        <p>{{$passport->descripation1}}</p>
      </div>
    </div>
	

    <div class="col-sm-4">
      <div class="thumbnail">
       <img src="{{ url('/') }}/img/{{$passport->image2}}" alt="New York" width="400" height="300">
        <p><strong>{{$passport->title2}}</strong></p>
        <p>{{$passport->descripation2}}</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
       <img src="{{ url('/') }}/img/{{$passport->image3}}" alt="San Francisco" width="400" height="300">
        <p><strong>{{$passport->title3}}</strong></p>
        <p>{{$passport->descripation3}}</p>
      </div>
    </div>
          @endforeach


  </div><br>
  
  
<!-- jumbotron start -->
<div class="container">
  <div class="jumbotron">
    <h1>Blue Sea Hotel</h1>      
    <p>Planning a brief or extended stay at Cox’s Bazar?</p>
  </div>
     
</div>
<!-- jumbotron end -->

@endsection

@section('foot')
    @parent

@endsection

