<?php
	class Confirmation extends Controller
	{
		public function index()
		{
			$categoryList = $this->itemModel->getCategories();
			
			require APP . 'view/_templates/header.php';
			require APP . 'view/thankyou/index.php';
			require APP . 'view/_templates/footer.php';
		}
		
	}
?>