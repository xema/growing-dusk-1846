<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto Createsse Hooptap</title>
</head>

<body style="margin:0; padding:0; width:520;">

<div style="margin:0; padding:0; width:520px; height:320px; background:#ffffff 	url(http://growing-dusk-1846.herokuapp.com/images/omexpo.jpg) no-repeat left top; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF;">
        	
            
        <div style="clear:both;"></div>
</div>


<div style="width:520px;">
<div style="background-image:url(images/fondo_sup.jpg); width:520px; height:24px; display:block"></div>
<div style="width:520px; display:block; background-image:url(images/fondo_centro.jpg); background-repeat: repeat-y;">
<div style="width: 150px; float: left; margin-left: 20px;">
<ul style=" padding-left: 5px;">
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/hooptap_foto/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 3); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) {
      $aux+=1;
    echo '<table width="150" border="0" cellspacing="0" cellpadding="0"> <tr><td"><img src="' . $val->url . '" width="125" height="125"/></td></tr>'
    	.'<tr align="center"><td ><table><tr><td><p style="color: #414141; font-size: 10px; font-family: Arial, Helvetica, sans-serif; margin: 0;">Subida por: <span style="overflow:hidden; color: #945836; font-weight:bold; text-transform:uppercase; display: block; height: 15px; width: 125px;">'.$val->nombre
	.'</span></p>'
	.'</td></tr></table></td></tr>'
    .'</table>';
    if($i != 0 && $i % $s == 0)
    {
        ?>
        </ul>
        </div>
       <div style="width: 150px; float: left; margin-left: 20px;">
        <ul style=" padding-left: 5px;">
        <?php
    }
    $i++;

}
?>

</ul>
</div >
<div style="clear:both;"></div>
</div>
<div style="background-image:url(images/fondo_infe.jpg); width:520px; height:24px; display:block"></div>

</div>

</body>
</html>
