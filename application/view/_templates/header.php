<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSC 648 - Group 7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
	   padding: 25px;
      margin-bottom: 50px;
      border-radius: 0;
	   background-color: #26215f;


    }
	.btn {
    
    border-color: #46b8da;
    padding-left: 50px;
    padding-right: 50px;
}

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #53565A;
      padding: 25px;
    }
	.h4, h4{
		font-size : 20px;
		color : white;
		
		text-decoration: underline;
		
	}
	a {
                color: #3399ff;
		text-align: center; 
	}

    .footerLinks{
      color:white;

    }

    .headerLinks{
      color:white;

    }
    .footerLinks:hover{
      color:#C99700;

    }

    .headerLinks:hover{
      color:#C99700;

    }

    .navbar-inverse .navbar-nav>li>a {
    color: white;
    }

    .navbar-inverse .navbar-nav>li>a:hover {
    color: #C99700;
    }    

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
	    <div class="row text-center">
	<div class="form-inline">
		 <label > <br> 	   
	  <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="menuitem" data-toggle="dropdown">All
      <span class="caret"></span></button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="menuitem">
	  <li role="presentation"><a role="menuitem" tabindex="1" href="#">All</a></li>
      <li role="presentation"><a role="menuitem" tabindex="1" href="#">Books</a></li>
      <li role="presentation"><a role="menuitem" tabindex="1" href="#">Office Supplies</a></li>
      <li role="presentation"><a role="menuitem" tabindex="1" href="#">Clothes</a></li>
	  <li role="presentation"><a role="menuitem" tabindex="1" href="#">Furniture</a></li>
      <li role="presentation"><a role="menuitem" tabindex="1" href="#">Electronic Supplies</a></li>
      <li role="presentation"><a role="menuitem" tabindex="1" href="#">Other</a></li>
    </ul>
  </div>
	  </label>
	  <input type="search" class="form-control" size="100px" class="glyphicon glyphicon-search" placeholder="Search">
	  <button type="button" class="btn btn-secondary btn-primary ">  Search  </button>
			</div>
		</div>
	  </div>
    </div>

      <ul class="nav navbar-nav navbar-right">

	<li><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
        <li><a href="<?php echo URL; ?>home/cart" class="headerLinks"><span class="glyphicon glyphicon-shopping-cart headerLinks"></span> Cart</a></li>
        <li><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li><a href="<?php echo URL; ?>home/profile" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span> Profile</a></li>
      </ul>
    </div>
  </div>
</nav>
 <script>
$(function(){
  
  $(".dropdown-menu li a").click(function(){
    
    $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
  });

});
$(function(){
  
  $(".dropdown-menu1 li a").click(function(){
    
    $(".btn:first-child").text($(this).text());
     $(".btn:first-child").val($(this).text());
  });

});
  </script>
