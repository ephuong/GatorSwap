
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

  <a class="navbar-left" href="<?php echo URL; ?>home/index"><img id="logo" src="https://s31.postimg.org/5s7zczl7f/Gator_Swap_Logo.jpg" alt="GatorSwap" width="105" height="95"></img></a>


  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<!--         <a class="navbar-brand" href="<?php echo URL; ?>home/index"><img id="logo" src="https://s31.postimg.org/5s7zczl7f/Gator_Swap_Logo.jpg" alt="GatorSwap" width="125" height="75"></img></a>
 -->    
  </div>

  <div class="navbar-collapse collapse" id="myNavbar" style=" margin-top:20px;">
  <form class="form-inline pull-xs-right" action="<?php echo URL; ?>home/search" method="POST">


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

			<select class="form-control" id="menuitem" name="search-category">
				<?php foreach ($categoryList as $category) { 
					if (isset($category->Category_ID))
						$category_id = htmlspecialchars($category->Category_ID, ENT_QUOTES, 'UTF-8');
					if (isset($category->Category_Name))
						$category_name = htmlspecialchars($category->Category_Name, ENT_QUOTES, 'UTF-8');
				?>
				<option <?php echo isset($_POST['search-category']) && $_POST['search-category'] == $category_id ? 'selected="' . $_POST['search-category'] . '" value="' . $category_id . '"' : 'value="' . $category_id  . '"' ?>>
					<?php echo $category_name; ?>
				</option>
				<?php } ?>
			</select> 
		</li>


        <li>
			<input class="form-control search-input" type="text" placeholder="Search for an item" name="search-keyword" value="<?php echo isset($_POST['search-keyword']) ? $_POST['search-keyword'] : '' ?>">
			<button class="btn btn-success-outline" id="search-button" name="search" value="Search"><span class="glyphicon glyphicon-search"></span></button>
		</li>
	  
    </ul>
</form>

    <ul class="nav navbar-nav navbar-right">  
       
        
  <li id="sellLink1"><a href="<?php echo URL; ?>checkLoginModal/index" data-remote="false" data-toggle="modal" data-target="#signinModal" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li> 
  <li id="sellLink2"><a href="<?php echo URL; ?>home/sell" class="headerLinks"><span class="glyphicon glyphicon-open headerLinks "></span> Sell An Item</a></li>
     
     <!-- modal template -->
<div class="modal fade" id="signinModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
           
    </div>
</div>
</div>
     
     <script>
                $("#signinModal").on("show.bs.modal", function(e) {
                var link = $(e.relatedTarget);
            $(this).find(".modal-content").load(link.attr("href"));
                });

     </script>
     

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
  </div>
</nav>

<script>
$(function() {
	$(#menuItem).
</script>
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