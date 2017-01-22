<?php
include_once ROOT.'/models/Personal.php';

class PersonalController
{
	public function actionList()
	{
		$booksList = array();
		$booksList = Personal::getPersonalList();

		require_once(ROOT.'/views/personal/list.php');

		return true;
	}
	public function actionDelete($id)
	{
		if($id)
		{
			Personal::deletePersonal($id);
			require_once(ROOT.'/views/personal/list.php');

		}
		
		return true;
	}

	public function actionUpdate($id)
	{
		$name = '';
		$department = '';

		if (isset($_POST['submit']))
         {
         	$name = $_POST['book_title'];
			$department = $_POST['book_author'];
            Personal::updatePersonal($id, $name, $department);
         }
        require_once(ROOT.'/views/personal/update.php');
		return true;
	}
}