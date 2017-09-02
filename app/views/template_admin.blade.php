<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hype & Vice</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="{{asset('assets/img/metis-tile.png')}}" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/lib/font-awesome/css/font-awesome.css')}}">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/mainadmin.css')}}">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/metismenu/metisMenu.css')}}">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/onoffcanvas/onoffcanvas.css')}}">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/lib/animate.css/animate.css')}}">


        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/validationEngine.jquery.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/lib/plupload/js/jquery.plupload.queue/css/jquery.plupload.queue.css')}}">
        <link rel="stylesheet" href="{{asset('assets/lib/jquery.gritter/css/jquery.gritter.css')}}">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Uniform.js/2.1.2/themes/default/css/uniform.default.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/personalstyle.css')}}">

                  
        <link rel="stylesheet/less" type="text/css" href="{{asset('assets/less/theme.less')}}">

      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/personal-styles.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

</head>

@if(Auth::check())
<body class="  ">
    <!-- https://colorlib.com/polygon/metis/form-wysiwyg.html -->
    <div class="bg-dark dk" id="wrap">
      <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <header class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <!-- <a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a> -->
            </header>
        
            <div class="topnav">
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                       class="btn btn-default btn-sm" id="toggleFullScreen">
                        <i class="glyphicon glyphicon-fullscreen"></i>
                    </a>
                </div>
               
                <div class="btn-group">
                    <a href="{{ URL::action('HomeController@logout') }}" data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                       class="btn btn-metis-1 btn-sm">
                        <i class="glyphicon glyphicon-off"></i>
                    </a>
                </div>
                <div class="btn-group">
                    <a data-placement="bottom" data-original-title="Show / Hide Left" data-toggle="tooltip"
                       class="btn btn-primary btn-sm toggle-left" id="menu-toggle">
                        <i class="glyphicon glyphicon-menu-hamburger"></i>
                    </a>
                    
                </div>
    
            </div>
        
            <div class="collapse navbar-collapse navbar-ex1-collapse">
    
                <!-- .nav -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::action('HomeController@home_admin') }}">Dashboard</a></li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Blog <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::action('BlogController@form_new_blog') }}">New Blog</a></li>
                            <li><a href="{{ URL::action('BlogController@list_blog') }}">List Blog</a></li>
                        </ul>
                    </li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            College <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::action('CollegeController@form_new_college') }}">New College</a></li>
                            <li><a href="{{ URL::action('CollegeController@list_college') }}">List College</a></li>
                        </ul>
                    </li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Product <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::action('ProductController@form_new_product') }}">New Product</a></li>
                            <li><a href="{{ URL::action('ProductController@list_product') }}">List Products</a></li>
                        </ul>
                    </li>
                    <li class='dropdown '>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Category <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::action('CategoryController@form_new_category') }}">New Category</a></li>
                            <li><a href="{{ URL::action('CategoryController@list_category') }}">List Category</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.nav -->
            </div>
          </div>
          <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <header class="head">
          
          <div class="main-bar">
            <h3>
              <i class="glyphicon glyphicon-home"></i>&nbsp;
              Hype & Vice
            </h3>
          </div>
            <!-- /.main-bar -->
        </header>
        <!-- /.head -->
    </div>
    <!-- /#top -->
    <div id="left">
      <div class="media user-media bg-dark dker">
          <div class="user-media-toggleHover">
              <span class="fa fa-user"></span>
          </div>
          <div class="user-wrapper bg-dark">
              <a class="user-link" href="">
                  {{ HTML::image('assets/img/female.png','Logo',array('class'=>'media-object img-thumbnail user-img', 'alt'=>'User Picture')) }}
                  
              </a>
      
              <div class="media-body">
                  <h5 class="media-heading">Ana Perez</h5>
                  <ul class="list-unstyled user-info">
                      <li><a href="">Administrator</a></li>
                      <li>Last Access : <br>
                          <small><i class="glyphicon glyphicon-calendar"></i>&nbsp;16 Mar 16:32</small>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
       <!-- #menu -->
      <ul id="menu" class="bg-blue dker">
                <li class="nav-header">Menu</li>
                <li class="nav-divider"></li>
                <li class="">
                  <a href="{{ URL::action('HomeController@home_admin') }}">
                    <i class="glyphicon glyphicon-home"></i>
                    <span class="link-title">&nbsp;Inicio</span>
                  </a>
                </li>
                <li class="">
                  <a href="javascript:;">
                    <i class="glyphicon glyphicon-list"></i>
                    <span class="link-title">
                  Blog
                  </span>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="collapse">
                   <li>
                      <a href="{{ URL::action('BlogController@form_new_blog') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; New Blog </a>
                    </li>
                     <li>
                      <a href="{{ URL::action('BlogController@list_blog') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; List Blog </a>
                    </li>
                  </ul>
                </li>
                <li class="">
                  <a href="javascript:;">
                    <i class="glyphicon glyphicon-tower"></i>
                    <span class="link-title">College</span>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="collapse">
                    <li>
                      <a href="{{ URL::action('CollegeController@form_new_college') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; New College </a>
                    </li>
                     <li>
                      <a href="{{ URL::action('CollegeController@list_college') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; List College </a>
                    </li>
                    
                  </ul>
                </li>
                <li class="">
                  <a href="javascript:;">
                    <i class="glyphicon glyphicon-tags"></i>
                    <span class="link-title">Product</span>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="collapse">
                    <li>
                      <a href="{{ URL::action('ProductController@form_new_product') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; New Product </a>
                    </li>
                     <li>
                      <a href="{{ URL::action('ProductController@list_product') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; List Products </a>
                    </li>
                    
                  </ul>
                </li>

                <li class="">
                  <a href="javascript:;">
                    <i class="glyphicon glyphicon-bookmark"></i>
                    <span class="link-title">Category</span>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                  </a>
                  <ul class="collapse">
                    <li>
                      <a href="{{ URL::action('CategoryController@form_new_category') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; New Category </a>
                    </li>
                     <li>
                      <a href="{{ URL::action('CategoryController@list_category') }}">
                        <i class="glyphicon glyphicon-chevron-right"></i>&nbsp; List Category </a>
                    </li>
                    
                  </ul>
                </li>
                
              </ul>
      <!-- /#menu -->
  </div>
@endif

@yield('content')
</div>
  @if(Auth::check())
    <footer class="Footer bg-dark dker">
        <p>2017 &copy; Hype & Vice</p>
    </footer>
  @endif  

          <script src="{{asset('assets/lib/jquery/jquery.js')}}"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.10/ckeditor.js"></script>
          <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
          <script src="{{asset('assets/js/jquery.validationEngine.min.js')}}"></script>
          <script src="{{asset('assets/js/jquery.validationEngine-en.min.js')}}"></script>

            <!--Bootstrap -->
            <script src="{{asset('assets/lib/bootstrap/js/bootstrap.js')}}"></script>
            <!-- MetisMenu -->
            <script src="{{asset('assets/lib/metismenu/metisMenu.js')}}"></script>
            <!-- onoffcanvas -->
            <script src="{{asset('assets/lib/onoffcanvas/onoffcanvas.js')}}"></script>
            <!-- Screenfull -->
            <script src="{{asset('assets/lib/screenfull/screenfull.js')}}"></script>

                <script src="{{asset('assets/lib/jquery-validation/jquery.validate.js')}}"></script>

                <script src="{{asset('assets/lib/plupload/js/plupload.full.min.js')}}"></script>
                <script src="{{asset('assets/lib/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js')}}"></script>
                <script src="{{asset('assets/lib/jquery.gritter/js/jquery.gritter.min.js')}}"></script>
                <script src="{{asset('assets/lib/formwizard/js/jquery.form.wizard.js')}}"></script>

            <!-- Metis core scripts -->
            <script src="{{asset('assets/js/core.js')}}"></script>
            <!-- Metis demo scripts -->
            <script src="{{asset('assets/js/app.js')}}"></script>

            @if(isset($blog) && isset($category))
              <script type="text/javascript">
                  $(document).ready(function(){
                      $("#list-category option[value={{$blog->category}}]").attr("selected",true);
                  });
              </script>
            @endif
                <script>
                    $(function() {
                      Metis.formValidation();
                    });
                </script>
</body>

</html>