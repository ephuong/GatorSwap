<?php
if(!session_id())
   {
    session_start();  
   }
class editProfile extends Controller
{
    public function profileEdit()
    {
         if(!session_id())
         {
           session_start();  
         }
       $categoryList = $this->itemModel->getCategories();
        
            require APP . 'view/_templates/header.php';
            require APP . 'view/profile/profileEdit.php';
            require APP . 'view/_templates/footer.php';
    }
    
    public function updateUserInfo() {
        
     if (isset($_POST["user-update"])) {       
          
         try {	
              
        
              $username = $_SESSION['username'];   
              
              $accountId = $this->UserModel->getAccountId($username);   
              
              $this->UserModel->updateUser($accountId,$_POST['firstName'],$_POST['lastName'],$_POST['phoneNumber'],$_POST['address'],$_POST['city'],$_POST['zipcode']);
              
               header('location: ' . URL . 'profile/index');
              
         } 
            
            catch(PDOException $e) 
            {
                
            echo $sql . "<br>" . $e->getMessage();

            }
         

       } 
        
    }

}
?>