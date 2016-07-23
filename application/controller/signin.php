<?php

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
               echo '<script language="javascript">';
               echo 'alert("User.php signIn User good.")';
               echo '</script>';
            
          		
          //Check is the user exists in the database
          $this->UserModel->loginAccount($_POST["username"],$_POST["password"]);
          
          if($_SESSION['login'])
          {
             // where to go after song has been added
             header('location: ' . URL . 'dashboard/index'); 
          }
          
        } 
        else if($_SESSION['login']==false)
        {
            echo '<script language="javascript">';
            echo 'alert("accounts.php signUser bad.")';
            echo '</script>';
        }	
         
            
           
	    
    }
	 			
}

