<?php
	class ThankYouMessage extends Controller
	{
		public function index()
		{
			$categoryList = $this->itemModel->getCategories();
			
			require APP . 'view/_templates/header.php';
			require APP . 'view/thankyoumessage/index.php';
			require APP . 'view/_templates/footer.php';
		}
		
	}
?>