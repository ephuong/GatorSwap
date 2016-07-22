<?php

class Dashboard extends Controller
{
	public function dashboard()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/dashboard.php';
        require APP . 'view/_templates/footer.php';
    }
				
}