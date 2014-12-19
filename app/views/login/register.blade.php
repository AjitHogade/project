<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Resgister</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<style>
body{background-color: #F7F7F6;}
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;}
</style>
</head>
 
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
 
            </a>
 
    <a href="#" class="brand">Application Name</a>
 
    <div class="nav-collapse collapse pull-right">
        <ul class="nav">
            <li><a href="#forgot" data-toggle="modal"><i class="icon-user icon-white"></i> Forgot Password</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#contact" data-toggle="modal"><i class="icon-envelope icon-white"></i> Contact Us</a></li>
            <li class="divider-vertical"></li>
 
        </ul>
    </div>
 
    </div>
  </div>
</div><br><br><br><br><br>



<div class="container">
  <div class="row ">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <div class="center span4 well">
        <legend>Register</legend>
       {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}
       <div class="form-group">
         <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
        {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter your full Name','required'=>'')) }}
         </div></div>
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username','required'=>'')) }}
          </div></div>
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
           {{ Form::password('password',array('id'=>'password','class'=>'form-control','placeholder'=>'Password','required'=>'')) }}
          </div></div>
            <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
           {{ Form::password('password_confirmation',array('id'=>'password','class'=>'form-control','placeholder'=>'Confirm-Password','required'=>'')) }}
          </div></div>
           {{ Form::submit('Resgister!',array('id'=>'submit','class'=>'btn btn-primary btn-block')) }}
           {{ Form::close() }}
           
          
          
        </div>
    </div>
    <div class="col-md-3">
       </div>
</div>
</div>
</div>

<p class="text-center muted ">&copy; Copyright 2013 - Application Name</p>





</body>
</html>