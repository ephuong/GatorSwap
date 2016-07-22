<?php

class Register extends Controller
{
	
      public function index()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/register/index.php';
		require APP . 'view/_templates/footer.php';
	}
	
    public function addUser()
	{
         //  Check that register button exists and was clicked
        if (isset($_POST["user_submit"])) {
            echo '<script language="javascript">';
            echo 'alert("accounts.php registerUser good.")';
            echo '</script>';
			
          //Insert new row in Account and setting the User's name in database using values inputted in the HTML form
          $newly_registered_account_id = $this->AccountModel->registerAccount($_POST["username"],$_POST["password"],$_POST["sfsu_id"]);
	  
          
	  $this->UserModel->setUser($newly_registered_account_id,$_POST["firstname"], $_POST["lastname"],$_POST["country"],$_POST["state"],$_POST["address"],$_POST["city"],$_POST["zipcode"],$_POST["phoneNumber"]);
	  		
        } 
        else 
        {
            echo '<script language="javascript">';
            echo 'alert("accounts.php registerUser bad.")';
            echo '</script>';
        }
		
	    // where to go after song has been added
            header('location: ' . URL . 'dashboard/index');
	}    
       
      
}

