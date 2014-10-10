<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="AtTheMatch - Where business and sport meet">
    <meta name="author" content="AtTheMatch">

	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <title>AtTheMatch - Where business and sport meet</title>
	
    <link href="bootstrap-3.2.0-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.2.0-dist/css/bootstrap.icon-large.min.css" rel="stylesheet">
    <link href="atthematch.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

<body>
<!-- -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">

      <div class="container-fluid nopadding">
			<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
		<div class="toplinks pull-left navbar-collapse collapse">

<div class="btn-group">
  <button type="button" class="btn btn-default articbtn">SECTIONS</button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu"  style="left:110px; top 5px;">
		  <li><a href="#">In the boardroom</a></li>
		  <li><a href="#">On the bench</a></li>
		  <li><a href="#">Half time</a></li>
		  <li><a href="#">Final whistle</a></li>
	</ul>

 </div>

<button type="button" class="btn btn-default">REGISTER</button> <!--IF LOGGED IN DO NOT SHOW -->
		
           <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="navLogin">Login</button>
		   <!--IF LOGGED IN CHANGE TO my account; DON NOT SHOW SUBMENU -->
            <div class="dropdown-menu loginbox">
              <form class="form" id="formLogin"> 
                <input name="username" id="username" type="text" placeholder="Username"><br> 
                <input name="password" id="password" type="password" placeholder="Password"><br>
                <button type="button" id="btnLogin" class="btn btn-success pull-right">LOG IN</button>
              </form>
			  <div class="small_register"><a href="#">Don't have an account? Register here</a></div>
            </div>

<form class="navbar-form srcbox" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
</form>

<!--end navbar--></div>





		<div class="toplogo pull-right">
		<a href="#"><img src="images/logo.png" class="img-responsive pull-right layers"></a>
		</div>
      
	  

		<div class="socials pull-right">
		<a href="#" target="_blank" class="linkedin pull-right">LinkedIn</a>
		<a href="#" target="_blank" class="twitter pull-right">Twitter</a>


		</div>




      </div>
    </div>
<?php



?>