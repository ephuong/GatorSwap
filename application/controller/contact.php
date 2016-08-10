<?php 

class Contact extends Controller
{
	/**
     * PAGE: contact
     * This method handles the contact page. 
     */
    public function index()
    {
        $categoryList = $this->itemModel->getCategories();
		
        require APP . 'view/_templates/header.php';
        require APP . 'view/contact/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>