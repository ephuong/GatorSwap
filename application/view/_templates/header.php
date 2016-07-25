<!DOCTYPE html>
<html lang="en">
<head>
  <title>CSC 648 - Group 7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="../sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
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
    
    .navbar-brand>img {
   max-height: 100%;
   height: 100%;
   width: auto;
   margin: 0 auto;


   /* probably not needed anymore, but doesn't hurt */
   -o-object-fit: contain;
   object-fit: contain; 

}

.centered-search
{
    position: absolute;
    width: 100%;
    left: 0;
    text-align: center;
    margin:0 auto;
}

#search-button
{
  padding-left: 15px;
  padding-right: 15px;
}

.input-block-level {
  display: block;
  width: 100%;
  min-height: 28px;       
  .box-sizing(border-box);
}

  </style>
</head>
<body>

<!-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php echo URL; ?>home/index">Logo</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
	   <div class="form-inline">
     <div class="row text-center"> 
		 <label>

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
    <button type="button" class="btn btn-secondary btn-primary "> Search </button>

	<ul class="nav navbar-nav navbar-right collapse navbar-collapse">
        <li><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
        <li><a href="<?php echo URL; ?>home/cart" class="headerLinks"><span class="glyphicon glyphicon-shopping-cart headerLinks"></span> Cart</a></li>
        <li><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li><a href="<?php echo URL; ?>home/profile" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span> Profile</a></li>
    </ul>
    
    </div>
    </div>
    </div>
</nav> -->

<!-- <nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar">test<div class="row"></div><div class="row"></div></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
    <a class="centered-search" href="#">Brand</a>
  </div>
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="#">Left</a></li>
        <li><a href="#about">Left</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#about">Right</a></li>
      <li><a href="#contact">Right</a></li>
    </ul>
  </div>
</nav> -->

<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
        <li><a href="<?php echo URL; ?>home/index">Logo</a></li>
        <li>
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
          </li>

        <li>
          <form class="form-inline pull-xs-right">
            <input class="form-control input-block-level" type="text" placeholder="Search">
            <button class="btn btn-success-outline" id="search-button" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </form>
      </li>
    </ul>


    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
        <li><a href="<?php echo URL; ?>home/cart" class="headerLinks"><span class="glyphicon glyphicon-shopping-cart headerLinks"></span> Cart</a></li>
        <li><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li><a href="<?php echo URL; ?>home/profile" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span> Profile</a></li>
    </ul>
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
