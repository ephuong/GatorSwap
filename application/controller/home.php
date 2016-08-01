<?php

   if(!session_id())
   {
    session_start();  
   }

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
   public function index()
    {
	$categoryList = $this->itemModel->getCategories();
		
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
 
   
    /**
     * PAGE: profile
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function profile()
    {
        $categoryList = $this->itemModel->getCategories();
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/profile.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the users carted items. 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function cart()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/cart.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the about page. 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function about()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the terms page 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function terms()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/terms.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the privacy page. 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function privacy()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/privacy.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the contact page. 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function contact()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/contact.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: cart
     * This method handles the help page. 
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function help()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/help.php';
        require APP . 'view/_templates/footer.php';
    }
    

    
	public function sell ()
	{
        $categoryList = $this->itemModel->getCategories();
        
	require APP . 'view/_templates/header.php';
	require APP . 'view/home/sell.php';
	require APP . 'view/_templates/footer.php';

      }      
	public function checkout()
	{
        $categoryList = $this->itemModel->getCategories();
            
	require APP . 'view/_templates/header.php';
	require APP . 'view/home/checkout.php';
	require APP . 'view/_templates/footer.php';
        }


    public function search()
    {
        $categoryList = $this->itemModel->getCategories();
        
            if(isset($_POST["search"])) {
			    $results = $this->itemModel->searchItems($_POST["search-keyword"], $_POST["search-category"]);
		    }   

            require APP . 'view/_templates/header.php';
            require APP . 'view/home/search.php';
            require APP . 'view/_templates/footer.php';
    }

}
