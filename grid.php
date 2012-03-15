<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto Createsse Hooptap</title>
</head>

<body style="margin:0; padding:0; width:520;">
<center>
<div style="margin:0; padding:0; width:520px; height:340px; background:#ffffff 	url(http://176.34.252.128/preview/fb/hooptap_foto/images/FACEBOOK.jpg) no-repeat left top; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF;">
        	
            
        <div style="clear:both;"></div>
</div>


<div style="width:520px; ">

<div style="width:155px; float:left;">
<ul>	
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/hooptap_foto/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 3); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) {
      $aux+=1;
    echo '<table border="0"> <tr><td><img src="' . $val->url . '" width="125" height="125"/></td></tr>'
    .'<tr align="center"><td ><table><tr><td>'.$val->nombre
	.'<iframe src="//www.facebook.com/plugins/like.php?href=http://hooptap.com/fb/hooptap_foto/grid.php?id='.$aux.'&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21&amp;appId=360540313963881" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:21px;" allowTransparency="true"></iframe>'
.'</td></tr></table></td></tr>'
    .'</table>';
    if($i != 0 && $i % $s == 0)
    {
        ?>
        </ul>
        </div>
        <div style="width:155px; float:left;  ">
        <ul>
        <?php
    }
    $i++;

}
?>

</ul>
</div >
</div>
</center>
</body>
</html>
