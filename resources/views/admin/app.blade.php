<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<!-- navigation start -->  
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:brick; font-family: 'Times New Roman', Times, serif;">
      <b>Blue Sea Hotel</b></a>
    </div>
    <ul class="nav navbar-nav pull-right">
      <li class="active"><a href="/">Home</a></li>
      <li><a href="adminbooking">Book</a></li>
      <li><a href="food">Food</a></li>
      <li><a href="goods">Goods</a></li>
      <li><a href="employee">Employee</a></li>
      <li><a href="front">Front</a></li>
      <li><a href="laundry">Laundry</a></li>
      <li><a href="enquiry">Enquiry</a></li>
      <li><a href="transport">Trans</a></li>
      <li><a href="accounts">Account</a></li>
      <li><a href="client">Client</a></li>
     
    </ul>
  </div>
</nav>
<!-- navigation end -->
        @show

        <div class="container">
            @yield('content')
        </div>
        
@section('foot')        
        <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Website Made By <a href="https://www.rafia.com" title="Visit w3schools">Rafia Binta Rouf</a></p>
</footer>

        @show

    </body>
</html>