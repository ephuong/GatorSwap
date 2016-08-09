<?php

   
class Register extends Controller
{
	
    public function index()
    {
      $categoryList = $this->itemModel->getCategories();
            require APP . 'view/_templates/header.php';
            require APP . 'view/register/index.php';
            require APP . 'view/_templates/footer.php';
    }
	
   public function addUser()
   {
      $categoryList = $this->itemModel->getCategories();

       //  Check that register button exists and was clicked
       if (isset($_POST["user_submit"])) {       
           echo '<script language="javascript">';
           echo 'alert("accounts.php registerUser good.")';
           echo '</script>';

         $email = $_POST['email'];
         $myArray = []; //Declare an empty array
         $myArray = explode('@', $email); //split up the email by @ sign
         $username = $myArray[0];		
         //Insert new row in Account and setting the User's name in database using values inputted in the HTML form
         $newly_registered_account_id = $this->AccountModel->registerAccount($username,$_POST["password"],$_POST["sfsu_id"]);

         $this->UserModel->setUser($newly_registered_account_id,$_POST["firstname"], $_POST["lastname"],$_POST["country"],$_POST["state"],$_POST["address"],$_POST["city"],$_POST["zipcode"],$_POST["phoneNumber"]);

       } 
       else 
       {
           echo '<script language="javascript">';
           echo 'alert("accounts.php registerUser bad.")';
           echo '</script>';
       }

           // where to go after song has been added
           header('location: ' . URL . 'home/index');
     }    

      
}

