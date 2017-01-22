<?php

/**
* 
*/
class Personal
{
	public static function getPersonalList()
	{

		$booksList = array();
		$db = Db::getConnection();

		$sql = $db->query('SELECT id, name, department '
            .'FROM personal '
            .'ORDER BY id '
            .'LIMIT 10 ');

		$i = 0;
		while($row = $sql->fetch())
		{
			$booksList[$i]['id'] = $row['id'];
			$booksList[$i]['name'] = $row['name'];
			$booksList[$i]['department'] = $row['department'];
			$i++;
		}

		return $booksList;
	}

	public static function deletePersonal($id)
	{
		$id = intval($id);
		if($id){
			$db = Db::getConnection();
			$sql = $db->query('DELETE '
	            .'FROM personal '
	            .'WHERE id = '.$id);

			return true;
		}
	}
	public static function updatePersonal ($id, $book_title, $book_author) 
    {
		$db = Db::getConnection();
		$sql = ('UPDATE personal '
			.'SET `name` = :name, `department` = :department '
			.'WHERE id = '.$id);

		$result = $db->prepare($sql);
		$result->bindParam(':name', $book_title);
		$result->bindParam(':department', $book_author);
        $result->execute();
        return true;
        
    }
}