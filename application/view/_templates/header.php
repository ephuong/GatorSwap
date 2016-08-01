
<!DOCTYPE html>
<html lang="en">
    
<head>
  <title>CSC 648 - Group 7</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/custom.css"> 
</head>

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <a class="navbar-left" href="<?php echo URL; ?>home/index"><img id="logo" src="https://s31.postimg.org/5s7zczl7f/Gator_Swap_Logo.jpg" alt="GatorSwap" width="65" height="55"></a>

 

 <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">
        <li>
  
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
    <?php
           if(isset($_SESSION["login"])){
               if($_SESSION["login"])
             {
             
             echo "
            <script type=\"text/javascript\">
              $('#sellLink').show();
              </script>
              ";
             }
           }      
          else 
           {
              //Logout
            echo "
            <script type=\"text/javascript\">
              $('#sellLink').hide();
              </script>
             "; 
           }
                       
        ?>      
        
  <li id="sellLink1"><a href="<?php echo URL; ?>checkLoginModal/index" data-remote="false" data-toggle="modal" data-target="#myModal" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li> 
  <li id="sellLink2"><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
     
     <!-- modal template -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
            
    </div>
</div>
</div>
     
     <script>
                $("#myModal").on("show.bs.modal", function(e) {
                var link = $(e.relatedTarget);
            $(this).find(".modal-content").load(link.attr("href"));
                });

     </script>
     
     
        <li id="cartLink"><a href="<?php echo URL; ?>home/cart" class="headerLinks"><span class="glyphicon glyphicon-shopping-cart headerLinks"></span> Cart</a></li>
        <li id="signinLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Sign In</a></li>
        <li id="registerLink"><a href="<?php echo URL; ?>register/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Register</a></li>
        <li id="logoutLink"><a href="<?php echo URL; ?>signin/index" class="headerLinks"><span class="glyphicon glyphicon-log-in headerLinks"></span> Logout</a></li>
        <li id="profileLink"><a href="<?php echo URL; ?>profile/index" class="headerLinks"><span class="glyphicon glyphicon-user headerLinks"></span>
        
        <?php
           if(isset($_SESSION["login"])){
               if($_SESSION["login"])
             {
              echo $_SESSION['username'];
             echo "
            <script type=\"text/javascript\">
              $('#sellLink1').hide();
              $('#sellLink2').show();
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
              $('#sellLink2').hide();
               $('#sellLink1').show();
              $('#signinLink').show();
              $('#logoutLink').hide();
              $('#profileLink').hide();
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