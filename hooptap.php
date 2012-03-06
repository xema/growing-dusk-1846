<?php 

$l=$_GET['url'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto Createsse Hooptap</title>
</head>

<body style="margin:0; padding:0; ">
<CENTER>
         	
 			<a style="padding:0 0 0 0;" href="http://hooptap.com" target="blank"/><img src="images/logo_oficial.jpg" alt="" />  </a>   
         <div style="clear:both;"></div>

<div style="width:180px; float:left;">
<ul>
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/createsse/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 1); // change 3 to the number of columns you want to have.
/*
foreach ($con as $val) {
      
    echo '<table border="0" align="center"> <tr><td><img src="' . $val->url . '" width="380" height="320"/></td></tr>'
    .'<tr align="center"><td ><table><tr><td>'.$val->nombre
	.'<iframe src="//www.facebook.com/plugins/like.php?href='.$val->url.'&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21&amp;appId=360540313963881" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>'
.'</td></tr></table></td></tr>'
    .'</table>';
    if($i != 0 && $i % $s == 0)
    {
        ?>
        </ul>
        </div>
        <div style="width:150px; float:left;  ">
        <ul>
        <?php
    }
    $i++;

}*/
?>

</ul>
</div >
</CENTER>

</body>
</html>
