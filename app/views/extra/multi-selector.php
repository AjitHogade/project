
<html >
<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
<meta name="viewport" content="width=device-width,initial-scale=1" />
 
<!-- StyleSheet -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/media/css/style.css">
<link href="/media/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
 <script src="/media/js/jquery.js" type="text/javascript"></script>
<script src="/media/js/bootstrap.min.js" type="text/javascript"></script>
<img src="/media/images/switch.png">
<style>
body{background-color: #F7F7F6;}
.login{padding-top: 65px;}
.center{float: none; margin-left: auto; margin-right: auto;}
.custom-header{
  background-color:black;color: white;
}
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
           <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon">Account Name</span>
           {{ Form::text('name',null,array('id'=>'name','class'=>'form-control','placeholder'=>'Enter Account Name','required'=>'')) }}
          </div></div>
          <div class="form-group">
          <div class="input-group">
           <span class="input-group-addon">Select Clients</span>
          <select multiple="multiple" id="custom-headers" class="searchable" name="selected_items[]">
      <option value='elem_1'>elem 1</option>
      <option value='elem_2'>elem 2</option>
      <option value='elem_3'>elem 3</option>
      <option value='elem_4'>elem 4</option>
    </select>
<script src="/media/js/jquery.multi-select.js" type="text/javascript"></script>
<script src="/media/js/jquery.quicksearch.js" type="text/javascript"></script>
<script type="text/javascript">
$('.searchable').multiSelect({
  selectableHeader: "<input type='text' class='search-input' autocomplete='off' placeholder='try \"12\"'>",
  selectionHeader: "<input type='text' class='search-input' autocomplete='off' placeholder='try \"4\"'>",
  afterInit: function(ms){
    var that = this,
        $selectableSearch = that.$selectableUl.prev(),
        $selectionSearch = that.$selectionUl.prev(),
        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
    .on('keydown', function(e){
      if (e.which === 40){
        that.$selectableUl.focus();
        return false;
      }
    });

    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
    .on('keydown', function(e){
      if (e.which == 40){
        that.$selectionUl.focus();
        return false;
      }
    });
  },
  afterSelect: function(){
    this.qs1.cache();
    this.qs2.cache();
  },
  afterDeselect: function(){
    this.qs1.cache();
    this.qs2.cache();
  }
});

    </script>
          </div></div>
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
</html>