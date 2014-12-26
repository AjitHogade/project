
<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/media/css/style.css">
<link href="/media/css/tagit-awesome-blue.css" type="text/css" rel="stylesheet">

<script src="/media/js/bootstrap.min.js"></script>
<script src="/media/js/jquery.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript" src="/media/js/tagit.js" charset="UTF-8"></script>


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
                    <li><a href="#">Administration</a></li>
                   <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                  </ul><!-- /.navbar-collapse -->
 
    
 
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
      <li ><a href="addClients" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i>Create Client
          </a>
      </li>
      <li class="active">
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
      <div class="tab-pane fade" id="profile">
          <h2>Profile Content Goes Here</h2>
          
      </div>
      <div class="tab-pane fade active in" id="messages">
          <div class="center span4 well">
        <legend>Add an Account</legend>
         {{Form::open(array('action' => 'AccController@add','id'=>'contactform','file'=>true,'method' => 'post','onsubmit'=>'copyTags()'))}}
           <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Account Name</span>
           {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter Account Name','required'=>'')) }}
          </div></div>
          <div class="form-group">
           
<ul id="demo2" data-name="demo2">
      
    </ul>

    <input type="hidden" style="display:none;" value="" name="tages" id="tages">
 
          </div>
          
           {{ Form::submit('ADD!',array('id'=>'submit','class'=>'btn btn-primary ')) }}
           {{ Form::close() }}
     </div>
        </div>
          <div class="tab-pane fade" id="clients">
          <h2>Client Content Goes Here</h2>
          
     
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

<script>
$(document).ready(function(){
  var availableTags = [
    {
        label: "myTag",
        value: "myTag",
        id: 1
    },
    //etc...
];
var assignedTags = [];


    $('#demo2').tagit({

      fieldName: "tages[]",

      tagSource:function (request, response) {

 // alert(request.term);
$.ajax({
url: '/searchClients',
data: { format: "json", keywords: request.term },
dataType: 'json',
type: 'GET',
success: function (data) {
response($.map(data, function (item) {
return {
label: item.name,
value: item.name
}}));},
error: function (request, status, error){
alert(error);
},
complete: function(request, status, error){ 
}
})}, 

      placeholder: "Click here to select Clients", 
      inputWidth: 180 
    });

});

function copyTags(){
 // alert($('#demo2').tagit('tags'));


var tags = $('#demo2').tagit('tags');
var value = "";
for (var i in tags)
      value +=  tags[i].value + ",";

$("#tages").val(value);



}




</script>

</html>