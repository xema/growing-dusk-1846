<?php

include("dbconect.php");
$con = conectame();
$rid=$_GET['rid'];
 
$sql=mysql_query("SELECT u.name, u.imgid AS url, u.id AS user_id
FROM rstatuses AS r
RIGHT JOIN users AS u ON u.id = r.user_id
WHERE r.reto_id =$rid AND r.disponibilidad=3
GROUP BY u.name DESC
ORDER BY `u`.`name` ASC
LIMIT 0 , 30");

while($row = mysql_fetch_array($sql))
{
//array_push($stack,$row['url'],$row['user']);
$fotos[] = array('user_id'=>$row['user_id'], 'url'=>$row['url'],'nombre'=>utf8_encode($row['name']),'mark'=>$row['mark']);
}
$a=json_encode($fotos);
echo $a;

?>
