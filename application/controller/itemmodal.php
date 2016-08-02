<?php


class ItemModal extends Controller {
  
  
  public function index () {
    
    if(isset($_POST["item_id"])) {
			    $results = $this->itemModel->findItem($_POST["item_id"]);
		}   
        
    require APP . 'view/ajax/item-modal.php';
    
  }
}

?>