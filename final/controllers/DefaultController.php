<?php

class DefaultController
{
	
	public function actionView()
	{
		
			
		require_once(ROOT.'/views/default.php');
		return true;
	}
}