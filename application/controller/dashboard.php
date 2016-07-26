<?php

if(!session_id())
   {
    session_start();  
   }
   
class Dashboard extends Controller
{
	public function index()
    {
        // load views
        require APP . 'view/_templates/header.php'; //Do not lead the header
        require APP . 'view/dashboard/index.php';
        require APP . 'view/_templates/footer.php';
    }
				
}