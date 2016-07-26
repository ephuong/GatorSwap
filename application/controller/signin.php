<?php
 if(!session_id())
   {
    session_start();  
   }
class Signin extends Controller
{
	public function index()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/signin/index.php';
		require APP . 'view/_templates/footer.php';
	}

        
        	/**
	 * @param int $student_id, string $username, string $password Logs a user to the site
	 * @return boolean check that the user logging in exists in the Account table
	  */
   public function login() {
  
          //  Check that signin button responds and was clicked
            if (isset($_POST["user-signin"])) 
        {       
               //echo '<script language="javascript">';
               //echo 'alert("User.php signIn User good.")';
               //echo '</script>';
            
          		
          //Check is the user exists in the database
          $this->UserModel->loginAccount($_POST["username"],$_POST["password"]);
          
          if($_SESSION['login'])
          {
             // where to go after song has been added
             header('location: ' . URL . 'dashboard/index'); 
          }
            else if(!isset ($_SESSION['login'])|| $_SESSION['login']==false)
        { 
          
         //User is invalid Warning here
         $message = "Username and/or Password incorrect.\\nTry again.";
         echo "<script type='text/javascript'>alert('$message');</script>"; 
         ?>

        <script>  
         var url = window.location.href;   
         var newUrl = url.split("/");
         delete newUrl[5];
         delete newUrl[6];
         var modifiedUrl = newUrl.join("/");
         location.href = modifiedUrl+"signin/index";   
        </script>
        
        <?php  } 
        
        
      	  
    }
	 			
}
 
}
 