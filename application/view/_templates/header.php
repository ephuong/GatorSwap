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
   margin-top: 10px;
 }
 
 .search-input {
   margin-top: 10px;
   width:450px !important;
   margin-left: 10px;
   margin-right: 10px;
 }
 
 #menuitem
 {
   padding-left: 20px;
   padding-right: 20px;
   margin-right: 5px;
   margin-top: 10px;
 
 }

 #logo{
  margin-right: 10px;

 }

   
  </style>
 
  
</head>
<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <a class="navbar-left" href="<?php echo URL; ?>home/index"><img id="logo" src="https://s31.postimg.org/5s7zczl7f/Gator_Swap_Logo.jpg" alt="GatorSwap" width="65" height="55"></img></a>

  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<!--         <a class="navbar-brand" href="<?php echo URL; ?>home/index"><img id="logo" src="https://s31.postimg.org/5s7zczl7f/Gator_Swap_Logo.jpg" alt="GatorSwap" width="125" height="75"></img></a>
 -->    </div>

  <div class="navbar-collapse collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <!-- <div class="dropdown">
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
              </div> -->

              <select class="form-control" id="menuitem">
                <option value="All">All</option>
                <option value="Books">Books</option>
                <option value="Office Supplies">Office Supplies</option>
                <option value="Clothing">Clothing</option>
                <option value="Furniture">Furniture</option>
                <option value="Electronics">Electronics</option>
              </select>
          </li>

        <li>
          <form class="form-inline pull-xs-right" action="<?php echo URL; ?>home/search" method="POST">
          
            <input class="form-control search-input" type="text" placeholder="Search" name="search-keyword">
            <button class="btn btn-success-outline" id="search-button" name="search" value="Search"><span class="glyphicon glyphicon-search"></span></button>
          </form>
      </li>
    </ul>


    <ul class="nav navbar-nav navbar-right">     
        <li id="sellLink"><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
        <li id="cartLink"><a href="<?php echo URL; ?>home/cart" class="headerLinks"><span class="glyphicon glyphicon-shopping-cart headerLinks"></span> Cart</a></li>
        <li id="signinLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li id="registerLink"><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li id="logoutLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Logout</a></li>
        <li id="profileLink"><a href="<?php echo URL; ?>home/profile" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span>
        <?php
           if(isset($_SESSION["login"])){
               if($_SESSION["login"])
             {
             echo $_SESSION['username'];
             echo "
            <script type=\"text/javascript\">
              $('#signinLink').hide();
              $('#registerLink').hide();
              $('#profileLink').show();
              $('#logoutLink').show();
              </script>
              ";
             }
           }      
          else 
           {
              //Logout
             echo "
            <script type=\"text/javascript\">
              $('#signinLink').show();
              $('#logoutLink').hide();
              $('#profileLink').hide();
              $('#sellLink').hide();
              $('#cartLink').hide();
              </script>
             "; 
             if (session_id()){
             session_destroy();   
              } 
           }
                       
           ?>  
           </a>
        </li>
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

<style>

.panel-primary>.panel-heading {
    background-color: #000000;
    border-color: #000000;
}

.panel-primary{
  border-color: #53565a
}

</style>