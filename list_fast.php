<?php

include("dbconect.php");
$con = conectame();
$rid=$_GET['rid'];
 
$sql=mysql_query("SELECT r.type, r.reto_id, r.user_id, r.mark AS mark, u.name AS name, u.imgid  AS url  FROM ranking_games AS r 
LEFT JOIN users AS u ON u.id = r.user_id WHERE  r.type='parejas-abierto' AND r.reto_id=$rid AND u.group_id=4 
ORDER BY `r`.`mark` ASC LIMIT 0 , 5 ");

/*$sql=mysql_query("SELECT r.type, r.reto_id, r.user_id, r.mark AS mark, u.name AS name, u.imgid  AS url  FROM ranking_games AS r 
LEFT JOIN users AS u ON u.id = r.user_id WHERE  r.type='parejas-abierto' AND r.reto_id=$rid   
ORDER BY `r`.`mark` ASC LIMIT 0 , 5 ");
 */

while($row = mysql_fetch_array($sql))
{
//array_push($stack,$row['url'],$row['user']);
$fotos[] = array('user_id'=>$row['user_id'], 'url'=>$row['url'],'nombre'=>utf8_encode($row['name']),'mark'=>$row['mark']);
}
$a=json_encode($fotos);
echo $a;

?>
