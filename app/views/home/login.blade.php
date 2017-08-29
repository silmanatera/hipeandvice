@extends ('template_admin')

@section ('content')
<body class="login">

      <div class="form-signin">
    <div class="text-center">
        <img src="assets/img/Logo.png" alt="Metis Logo" style="width: 34%">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            {{ Form::open(array('url' => 'validate-login', 'method' => 'post')) }}
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input type="text" placeholder="Username" class="form-control top">
                <input type="password" placeholder="Password" class="form-control bottom">
                <div class="checkbox">
		  
		</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            {{ Form::close() }}
        </div>
        <div id="forgot" class="tab-pane">
            {{ Form::open(array('url' => 'recover-login', 'method' => 'post')) }}
                <p class="text-muted text-center">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control">
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
            {{ Form::close() }}
        </div>
       
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
        </ul>
    </div>
  </div>
@stop()
