<?php

/*
 * Este es el ranking para el puzzle y el parejas por tiempo
 * Imprime
 * 
*/
include("dbconect.php");
$con = conectame('pdo');
$reto_id=$_GET['reto_id'];

function conversor_segundos($seg_ini) {

$horas = floor($seg_ini/3600);
$minutos = floor(($seg_ini-($horas*3600))/60);
$segundos = $seg_ini-($horas*3600)-($minutos*60);
$tiempo = $horas.'h. '.$minutos.'m. '.$segundos.'s.';

return $tiempo;

}
 
// Usuarios activos
	$q = $con->prepare('SELECT r.mark AS mark, u.username AS name, u.imgid AS url, u.image AS image
						FROM ranking_games AS r 
						LEFT JOIN users AS u ON u.id = r.user_id 
						WHERE r.reto_id= ?
						ORDER BY r.mark ASC 
						LIMIT 0 , 30');
	$q->execute(array($reto_id));	
	$resultado = array();
	while($res = $q->fetch(PDO::FETCH_OBJ))
	{
		$img = 0;
		if($res->image == 1)
            $img = 'https://hooptap.s3.amazonaws.com/userprofiles/'.$res->url.'.jpg';
		$temp = conversor_segundos($res->mark);
		$resultado[] = array('tiempo'=>$temp, 'username'=>utf8_encode($res->name),'image'=>$res->image, 'img'=>$img);
	}
		
	 print(json_encode(array('usuarios'=>$resultado, 'status'=>'normal', 'user_winner'=>0)));
 
?>
