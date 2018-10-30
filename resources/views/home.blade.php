@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

<!-- image menu start -->
<div class="container">

  <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@adminbooking')}}" target="">
          <img src="{{ asset('img/image101.jpg') }}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Room Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@goods')}}" target="">
          <img src="{{ asset('img/image108.jpg') }}" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Goods Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@employee')}}" target="">
          <img src="{{ asset('img/image109.jpg') }}" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Employee Management</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
    <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@laundry')}}" target="">
          <img src="{{ asset('img/image111.jpg') }}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Laundry Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@enquiry')}}" target="">
          <img src="{{ asset('img/image116.jpg') }}" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Enquiry Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@transport')}}" target="">
          <img src="{{ asset('img/image120.jpg') }}" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Transport Management</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
  
  
    <div class="row">
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@client')}}" target="">
          <img src="{{ asset('img/image125.jpg') }}" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Guest Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@food')}}" target="">
          <img src="{{ asset('img/image106.jpg') }}" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Food Management</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="thumbnail">
        <a href="{{action('AdminController@front')}}" target="">
          <img src="{{ asset('img/image123.jpg') }}" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Front Management</p>
          </div>
        </a>
      </div>
    </div>
  </div>
  
    
</div>

<!-- image menu end -->





                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
