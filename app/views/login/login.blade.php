
<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<script src="/media/js/bootstrap.min.js"></script>

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
  <a class="navbar-brand" href="#">Application Name</a>
            </a>





             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profile</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Messages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Inbox</a></li>
                            <li><a href="#">Drafts</a></li>
                            <li><a href="#">Sent Items</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Trash</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
 
    
 
    </div>
  </div>
</div><br><br><br><br><br>



<div class="container">
  <div class="row ">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
      <div class="center span4 well">
        <legend>LOGIN</legend>
        {{Form::open(array('id'=>'contactform','file'=>true,'method' => 'post'))}}
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('username',null,array('id'=>'username','class'=>'form-control','placeholder'=>'Username','required'=>'')) }}
          </div></div>
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
           {{ Form::password('password',array('id'=>'','class'=>'form-control','placeholder'=>'Password','required'=>'')) }}
          </div></div>
           {{ Form::submit('Login!',array('id'=>'submit','class'=>'btn btn-primary btn-block')) }}
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