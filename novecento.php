<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.avatar{border-radius:100px;position:relative;z-index:1}
		.avatar-wrap{width:100px;height:100px;border-radius:100px;position:relative;border:8px solid #0489B1;margin:0 0 3px 0}
		 
		.box{border-radius:75px;position:relative;z-index:1; background-color:#01A9DB;}
 		.box-wrap{width:480px;border-radius:75px;position:relative;border:8px solid #0489B1;margin:0 0 3px 0}
	</style>
	<!-- 		.box{border-radius:75px;position:relative;z-index:1; background-image:url(./images/ios-linen.jpg); background-repeat:repeat;}
	 -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reto Hooptap</title>
</head>
<body>
<div style="margin:0; padding:0; width:480px;" align="center" class="box box-480 box-wrap">
  
 
<br> 
  <a style="font-family: Happy Monkey; font-size:35px; color:#FBF8EF"> Ranking Reto Buzz</a>
  <br>
<a style="font-family: Happy Monkey; font-size:30px; color:#FBF8EF" >Hooptap</img></a>

<ul style=" padding-left: 5px;">
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_fast.php?rid=253');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 1); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) {

      $aux+=1;
      if($val->url != "")
      {
    echo '<table width="480" border="0" cellspacing="0" cellpadding="0">  '
		    .'<tr><td width="15" align="right">'
		    .'<a style="font-family: Chango, cursive; font-size:35px; color:#FBF8EF">'.$aux.'.</a>'
		    .'<td> '
		    .' <td width="100"><div  class="avatar-wrap"><img  class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/' 
		    . $val->url .'.jpg" width="100" height="100"/>'
		    .'</div><td >'
		    . ' <td width="175">'
		    .'<a style="font-family: Happy Monkey; font-size:20px; color:#FBF8EF"> '.$val->nombre.' </a>'
			.'</td> ' 
			. ' <td width="85">'
		    .'<a style="font-family: Chango, cursive; font-size:20px; color:#FBF8EF">'
		    .$val->mark
		    .'</a><br><a style="font-family: Happy Monkey; font-size:14px; color:#FBF8EF;"> puntos </a>'
			.'</td> '
		    .'</tr>'
    	.'</table>';
      }
      else
      {
    echo '<table width="480" border="0" cellspacing="0" cellpadding="0">  '
		    .'<tr><td width="15" align="right">'
		    .'<a style="font-family: Chango, cursive; font-size:35px; color:#FBF8EF;">'.$aux.'.</a>'
		    .'<td> '
		    .' <td width="100"><div class="avatar-wrap" ><img   class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="100" height="100"/>'
		    .'</div><td >'
		    . ' <td width="175">'
		    .'<a style="font-family: Happy Monkey; font-size:20px; color:#FBF8EF;"> '.$val->nombre.' </a>'
			.'</td> ' 
			. ' <td width="85">'
		    .'<a style="font-family: Chango, cursive; font-size:20px; color:#FBF8EF;">'
		    .$val->mark.'</a><br><a style="font-family: Happy Monkey; font-size:14px; color:#FBF8EF;"> puntos </a>'
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
