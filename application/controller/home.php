<?php

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
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * PAGE: Signin
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function signin()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/signin.php';
        require APP . 'view/_templates/footer.php';
    }
    
    /**
     * PAGE: Register
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function register()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/register.php';
        require APP . 'view/_templates/footer.php';
    }
    
    /**
     * PAGE: Register
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function addUser()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["user_submit"])) {
            $email = $_POST["email"];
            $myArray = []; //Declare an empty array
            $myArray = explode('@', $email); //split up the email by @ sign
            $username = $myArray[0];
            // do addSong() in model/model.php
            
            $this->model->addUser($_POST["firstname"], $_POST["lastname"],$username,$_POST["password"],$_POST["confirmPassword"],$_POST["sfsu_id"],$_POST["phoneNumber"],$_POST["address"],$_POST['city'],$_POST["zipcode"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'home/dashboard');
    }
    
    /**
     * PAGE: profile
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case-insensitive.
     */
    public function profile()
    {
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
    
    public function dashboard()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/dashboard.php';
        require APP . 'view/_templates/footer.php';
    }
      
}
