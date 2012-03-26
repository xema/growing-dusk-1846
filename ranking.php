<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
<style type="text/css">
 
.avatar{border-radius:125px;position:relative;z-index:1}
.avatar-wrap{width:125px;height:125px;border-radius:125px;position:relative;border:8px solid #0489B1;margin:0 0 3px 0}
 
.box{border-radius:75px;position:relative;z-index:1; background-image:url(http://cdn.css-tricks.com/wp-content/themes/CSS-Tricks-9/images/brushed_alu.png); background-repeat:repeat;}
.box-wrap{width:480px;height:800px;border-radius:75px;position:relative;border:8px solid #0489B1;margin:0 0 3px 0}
  
  </style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto Hooptap</title>
</head>
<body>
<div style="margin:0; padding:0; width:480px;" align="center" class="box box-500 box-wrap">
 
 <!-- 
<div style="margin:0; padding:0; width:480px; height:320px; background:#ffffff 	url(http://176.34.252.128/preview/fb/hooptap_foto/images/FACEBOOK.jpg) no-repeat left top; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF;">
       <div style="clear:both;"></div>
</div> -->
  <a style="font-family: Happy Monkey, cursive; font-size:45px; color:#0489B1"> Ranking Reto </a>  <a style="font-family: Yellowtail, cursive; font-size:50px; color:#0489B1;">Buzz</a>


  <ul style=" padding-left: 5px;">
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking_buzz/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 1); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) {

      $aux+=1;
      if($val->url != "")
      {
    echo '<table width="480" border="0" cellspacing="0" cellpadding="0">  '
    .'<tr><td width="10">'
    .'<a style="font-family: Chango, cursive; font-size:45px; color:#0489B1">'.$aux.'.  </a>'
    .'<td> '
    .' <td width="125"><div  class="avatar-wrap"><img  class="avatar avatar-125 photo" src="http://prod.hooptap.com/media/userprofiles/' 
    . $val->url .'.jpg" width="125" height="125"/>'
    .'</div><td >'
    . ' <td width="165">'
    .'<a style="font-family: Happy Monkey, cursive; font-size:20px; color:#0489B1"> '.$val->nombre.' </a>'
	.'</td> ' 
	. ' <td width="75">'
    .'<a style="font-family: Chango, cursive; font-size:20px; color:#0489B1">'
.$val->mark
.'</a><a style="font-family: Happy Monkey, cursive; font-size:14px; color:#0489B1;"> puntos </a>'
		.'</td> '

    .'</tr>'
    .'</table>';
      }
      else
      {
    echo '<table width="500" border="0" cellspacing="0" cellpadding="0">  '
    .'<tr><td width="15">'
    .'<a style="font-family: Chango, cursive; font-size:45px; color:#0489B1;">'.$aux.'.  </a>'
    .'<td> '
    .' <td width="125"><div class="avatar-wrap" ><img   class="avatar avatar-125 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="125" height="125"/>'
    .'</div><td >'
    . ' <td width="175">'
    .'<a style="font-family: Happy Monkey, cursive; font-size:20px; color:#0489B1;"> '.$val->nombre.' </a>'
	.'</td> ' 
	. ' <td width="85">'
    .'<a style="font-family: Chango, cursive; font-size:20px; color:#0489B1;">'
.$val->mark
.'</a><a style="font-family: Happy Monkey, cursive; font-size:14px; color:#0489B1;"> puntos </a>'
	.'</td> '

    .'</tr>'
    .'</table>';
      }
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

<div style="clear:both;"><br></br></div>
 
</div >
</body>
</html>
