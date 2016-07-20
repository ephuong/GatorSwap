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
      
}
