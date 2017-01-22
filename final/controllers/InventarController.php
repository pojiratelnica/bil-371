<?php
include_once ROOT.'/models/Inventar.php';

class InventarController
{
	public function actionList()
	{
		$booksList = array();
		$booksList = Inventar::getInventarList();
		// $b_name = Student :: getBolum();
		require_once(ROOT.'/views/inventar/list.php');
		
		return true;
	}

	public function actionFilter()
	{
		if (isset($_POST['search']))
         { 
            $tab = array();
            $tab = Inventar:: searchPersonal($_POST['name']);
         }
         else
         {
             $tab = array();
         }
        $b_name = array();
        $b_name = Inventar:: getRes();
        require_once(ROOT.'/views/inventar/filter.php');
        
        return true;
	}
	
	public function actionDelete($id)
	{
		if($id)
		{
			Inventar::deleteInventar($id);
			require_once(ROOT.'/views/inventar/list.php');
		}
		return true;
	}
	
	public function actionUpdate($id)
	{
		$title = '';
		$description = '';
		$responsable = '';

		if (isset($_POST['submit']))
         {
         	$title = $_POST['book_title'];
			$description = $_POST['book_author'];
			$responsable = $_POST['book_paper'];
            Inventar::updateInventar($id, $title, $description, $responsable );
         }
        require_once(ROOT.'/views/personal/update.php');
		return true;
	}
}