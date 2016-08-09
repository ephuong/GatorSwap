<?php

class ItemAction extends Controller
{
   
    
    
    public function postItem()
    {	
        $categoryList = $this->itemModel->getCategories();
        
        if (isset($_POST["postItem"])) 
        {
        //Insert new row in Account and setting the User's name in database using values inputted in the HTML form
        $newItem = $this->itemModel->createItem($_SESSION['account_id'], $_POST["item_title"], $_POST["item_category"], $_POST["item_price"], 
                   $_POST["item_desc"], $_POST["item_condition"] );
        
        // Display newly inserted item by the user
        $itemListArr = $this->itemModel->displaypostItem();
        
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/selldisplay.php';
        require APP . 'view/_templates/footer.php';
        }
		
    }
    
    public function displayCurrItemPost()
    {
        
        $itemListArr = $this->itemModel->displaypostItem();
                 
	require APP . 'view/_templates/header.php';
        require APP . 'view/home/selldisplay.php';
        require APP . 'view/_templates/footer.php';
        
    }
}

?>