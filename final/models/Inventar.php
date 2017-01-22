<?php

/**
* 
*/
class Inventar
{
	// public static function getPersonal(){
 //        $conn = Db::getConnection();
        
 //        $pers = array();
        
 //        $sql='SELECT id, name '
 //            .'FROM personal ';
        
 //        $i=0;
 //        while($stmt->fetch())
 //            {
 //                $pers[$i]['id'] = $id;
 //                $pers[$i]['bname'] = $bname;
 //                $i++;
 //            }
 //        }
        
 //        return $pers;
 //    }

	public static function getInventarList()
	{

		$booksList = array();
		$db = Db::getConnection();

		$sql = $db->query('SELECT id, title, description, responsable '
            .'FROM inventar '
            .'ORDER BY title ');

		$i = 0;
		while($row = $sql->fetch())
		{
			$booksList[$i]['id'] = $row['id'];
			$booksList[$i]['title'] = $row['title'];
			$booksList[$i]['description'] = $row['description'];
			$booksList[$i]['responsable'] = $row['responsable'];
			$i++;
		}

		return $booksList;
	}

	public static function deleteInventar($id)
	{
		$id = intval($id);
		if($id){
			$db = Db::getConnection();
			$sql = $db->query('DELETE '
	            .'FROM inventar '
	            .'WHERE id = '.$id);

			return true;
		}
	}
	public static function updateInventar ($id, $title, $description, $responsable) 
    {
		$db = Db::getConnection();
		$sql = ('UPDATE personal '
			.'SET `title` = :title, `description` = :title, `responsable` = :responsable '
			.'WHERE id = '.$id);

		$result = $db->prepare($sql);
		$result->bindParam(':title', $title);
		$result->bindParam(':description', $description);
		$result->bindParam(':responsable', $responsable);
        $result->execute();
        return true;
        
    }
  //   public static function searchBolum($id){
  //       $db = Db::getConnection();
		// $sql = ('SELECT a.id, a.name, a.age, b.facultet, b.bolum '
		// 	.'FROM bolum b, students a WHERE a.dep_id = '$id' and b.id_b = '$id'  '
		// 	.'WHERE id = '.$id);

  //       $tab = array();
        
  //       $sql="SELECT a.id, a.name, a.age, b.facultet, b.bolum "
  //           ."FROM bolum b, students a WHERE a.dep_id = '$id' and b.id_b = '$id' ";
  //       $stmt = $conn->prepare($sql); //dayardayt
  //       /* execute prepared statement */
  //       $stmt->execute(); //zapros
  //       $stmt->store_result(); // zapros
        
  // 		if ($stmt->num_rows>0)
  //   	{
  //   	$stmt->bind_result($id,$name,$age,$fa,$bo); // kelgen maanini yigarat
  //       // output data of each row
  //       $i=0;
  //       while($stmt->fetch())
  //           {
  //               $tab[$i]['id'] = $id;
  //               $tab[$i]['name'] = $name;
  //               $tab[$i]['age'] = $age;
  //               $tab[$i]['fa'] = $fa;
  //               $tab[$i]['bo'] = $bo;
  //               $i++;
  //           }
  //       }
        
  //       return $tab;
  //   }
}