<?php

class About extends Controller
{
	/**
     * PAGE: about
     * This method handles the about page. 
     */
    public function index()
    {
        $categoryList = $this->itemModel->getCategories();
		
        require APP . 'view/_templates/header.php';
        require APP . 'view/about/index.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>