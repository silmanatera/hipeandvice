<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>404</title>
    
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


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="error">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <div class="logo">
                <h1>404</h1>
            </div>
            <p class="lead text-muted">Nope, not here.</p>
            <div class="clearfix"></div>
            <div class="col-lg-6 col-lg-offset-3">
                <form action="index.html">
                    <div class="input-group">
                        <input type="text" placeholder="search ..." class="form-control">
                        <span class="input-group-btn">
              <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
            <div class="sr-only">
                &nbsp;
            </div>
            <br>
            <div class="col-lg-6 col-lg-offset-3">
                <div class="btn-group btn-group-justified">
                    <a href="<?=URL::to('/') ?>" class="btn btn-info">Return Dashboard</a>
                    <a href="<?=URL::to('/') ?>" class="btn btn-warning">Return Website</a>
                </div>
            </div>
        </div>
        <!-- /.col-lg-8 col-offset-2 -->
    </div>
</body>

</html>
