<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-reboot.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/mainfront.css')}}">
    
  </head>

  <body>
    <nav class="Mobile-Hype-Menu" id="Mobile-Toggle-Menu">
      <div class="Nav-Wrapper">
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">SHOP</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="">LOOKBOOK</a></li>
          <li><a href="">BLOG</a></li>
          <li><a href="">INSTAGRAM</a></li>
          <li><a href="">CUSTOM MADE</a></li>
        </ul>
      </div>
    </nav>

    <div class="Main-Wrapper">
      <nav class="navbar navbar-expand-lg  HVHead">
      <div class="Second-menu">
        <ul>
          <li><a href="">HOME</a></li>
          <li><a href="">SHOP</a></li>
          <li><a href="">ABOUT US</a></li>
          <li><a href="">LOOKBOOK</a></li>
          <li><a href="">BLOG</a></li>
          <li><a href="">INSTAGRAM</a></li>
          <li><a href="">CUSTOM MADE</a></li>
        </ul>
      </div>
      <button class="navbar-toggler HV-MButton" type="button" id="Desktop-Toggle">
          <img class="HV-icon" src="{{asset('assets/images/Icons/Octicons/grabber.svg')}}" alt="">
      </button>
      <button class="navbar-toggler" type="button" id="Mobile-Toggle">
          <img class="HV-icon" src="{{asset('assets/images/Icons/Octicons/grabber.svg')}}" alt="">
      </button>
      <div class="navbar-collapse Head-logo">
        <a href="Home.html">
          <img src="{{asset('assets/images/Logos/Hype-header.jpg')}}" alt="">
        </a>
      </div>
      <!-- Shopping icon -->
      <!-- <button class="navbar-toggler HV-Shop-Button HV-MButton" type="button">
        <img class="HV-icon" src="images/Icons/Octicons/search.svg" alt="">
      </button> -->
      <button class="navbar-toggler HV-MButton" type="button">
        <img class="HV-icon" src="{{asset('assets/images/Icons/Octicons/search.svg')}}" alt="">
      </button>
    </nav>
      @yield('content')
      

    
      <nav class="footer navbar navbar-expand-md navbar-expand-lg">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item"><a href="https://www.pinterest.com/hypeandvice/pins/">Pinterest</a></li>
            <li class="nav-item"><a href="Terms&Conditions.html">Terms & Conditions</a></li>
            <li class="nav-item"><a href="ReturnPolicy.html">Return Policy</a></li>
            <li class="nav-item"><a href="">Don't see your School? Click Here!</a></li>
          </ul>
        </div>
      </nav>


    <!-- Main-Wrapper -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/Main.js')}}"></script>
  </body>
</html>