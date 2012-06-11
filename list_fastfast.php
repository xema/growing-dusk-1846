<?php

/*
 * Este es el ranking para el puzzle y el parejas por tiempo
 * Imprime
 * 
*/
include("dbconect.php");
$con = conectame();
$rid=$_GET['rid'];
 
// Usuarios activos
	$q = $con->prepare('SELECT r.mark AS mark, u.username AS name, u.imgid AS url, u.image 
						FROM ranking_games AS r 
						LEFT JOIN users AS u ON u.id = r.user_id 
						WHERE u.group_id =4 AND r.reto_id= ?
						ORDER BY r.mark ASC 
						LIMIT 0 , 30');
	$q->execute(array($rid));	
	$resultado = array();
	while($res = $q->fetch(PDO::FETCH_OBJ))
		if($res->image == 1)
            $img = 'https://hooptap.s3.amazonaws.com/userprofiles/'.$res->imgid.'.jpg';
		$resultado[] = array('tiempo'=>$res->mark, 'username'=>utf8_encode($res->username),'image'=>$res->image, 'img'=>$img);
		
	print(json_encode($resultado);
 
?>
