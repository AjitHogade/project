
<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/media/css/style.css">
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





            
           <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-admin"></span>Administration</a></li>
                    <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                  </ul>
 
    
 
    </div>
  </div>
</div><br><br><br>  



<div class="container-fluid">
  <div class="row ">
    <div class="col-md-2">
    </div>
    <div class="col-md-9">
      <div class="center span4 well">
        <legend>WELCOME ADMIN</legend>
         <ul class="nav nav-tabs" role="tablist">
      <li>
          <a href="admin" role="tab" data-toggle="tab">
              <icon class="fa fa-home"></icon> Home
          </a>
      </li>
      <li class="active"><a href="addClients" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i>Create Client
          </a>
      </li>
      <li>
          <a href="addAccount" role="tab" data-toggle="tab">
              <i class="fa fa-envelope"></i>Create Account
          </a>
      </li>
     <li>
          <a href="allClients" role="tab" data-toggle="tab">
              <i class="fa fa-envelope"></i>All Clients
          </a>
      </li>
  
     
    </ul>
        
   
 <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade" id="home">
          <h2>Home Content Goes Here</h2>
          <div></div>
      </div>
      <div class="tab-pane fade active in" id="profile">
         <div class="center span4 well">
        <legend>Add a client with proper information</legend>
          {{Form::open(array('action' => 'ClientController@add','id'=>'contactform','file'=>true,'method' => 'post'))}}
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
           {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter full Name','required'=>'')) }}
          </div></div>
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
           {{ Form::text('phone','+91',array('id'=>'phone','class'=>'form-control','placeholder'=>'Contact Number','required'=>'')) }}
          </div></div>
           {{ Form::submit('ADD!',array('id'=>'submit','class'=>'btn btn-primary ')) }}
           {{ Form::close() }}
</div>
     </div>
      <div class="tab-pane fade" id="messages">
          <h2>Messages Content Goes Here</h2>
          
     
        </div>
      </div>

</div>
</div>

                
          
      
   
    </div>
     </div>
</div>





    <div class="col-md-2">
       </div>
</div>
</div>
</div>

<p class="text-center muted ">&copy; Copyright 2013 - Application Name</p>





</body>
</html>