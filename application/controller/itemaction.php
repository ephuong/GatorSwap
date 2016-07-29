<?php

class ItemAction extends Controller
{
    public function index()
    {	
            require APP . 'view/_templates/header.php';
            require APP . 'view/item_action/createItem.php';
            require APP . 'view/_templates/footer.php';
    }
    
    
    public function postItem()
    {	
            
        // Insert new row in Account and setting the User's name in database using values inputted in the HTML form
        $newItem = $this->itemModel->createItem($_POST["item_accid"], $_POST["item_title"], $_POST["item_category"], $_POST["item_price"], 
                       $_POST["item_desc"], $_POST["item_condition"] );
		
    }
}
?>