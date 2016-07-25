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
<script>
 $('#logoutLink').hide();
</script>
  
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
        <li id="logoutLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Logout</a></li>
        <li id="signinLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li id="registerLink"><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li id="profileLink"><a href="<?php echo URL; ?>home/profile" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span> Profile</a></li>
        
      </ul>
       <div id="username" style="font-size: 30px; color: whitesmoke;">
           
           <?php
           if(isset($_SESSION["login"])){
               if($_SESSION["login"])
             {
             echo "Logged in as ".$_SESSION['username'];
             echo "You acc id is".$_SESSION['account_id'];
             echo "
            <script type=\"text/javascript\">
              $('#signinLink').hide();
              $('#logoutLink').show();
              </script>
              ";
             }
           }      
          else 
           {
             echo "
            <script type=\"text/javascript\">
              $('#signinLink').show();
              $('#logoutLink').hide();
              
              </script>
              ";   
           }
         
    
           ?>
       </div>
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

<style>

.panel-primary>.panel-heading {
    background-color: #000000;
    border-color: #000000;
}

.panel-primary{
  border-color: #53565a
}

</style>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Books</div>
        <!--USING flaticon free icons here, need to put in doc -->
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126503.svg"  alt="Image"  width="300" height="200"></div>
        <div class="panel-footer">Click here to buy books</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Office</div>
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126483.svg"  alt="Image" width="300" height="200"></div>
        <div class="panel-footer">Click here to buy office supplies</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Clothing</div>
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126515.svg" width="300" height="200"alt="Image"></div>
        <div class="panel-footer">Click here to buy clothes</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Furniture</div>
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126496.svg"  height= "200" width ="300" alt="Image"></div>
        <div class="panel-footer">Click here to buy furniture</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Electronics</div>
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126512.svg" height= "200" width ="300" alt="Image"></div>
        <div class="panel-footer">Click here to buy electronic supplies</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Other</div>
        <div class="panel-body"><img src="http://image.flaticon.com/icons/svg/126/126498.svg"  height= "200" width ="300" alt="Image"></div>
        <div class="panel-footer">Click here to browse deals</div>
      </div>
    </div>
  </div>
</div><br><br>
