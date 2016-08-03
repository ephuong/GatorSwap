<?php

if(!session_id())
   {
    session_start();  
   }
   
class Profile extends Controller
{
	/**
     * PAGE: profile
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function index()
    {   
		$categoryList = $this->itemModel->getCategories();
	
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/profile/index.php';
        require APP . 'view/_templates/footer.php';
    }
    

				
}
