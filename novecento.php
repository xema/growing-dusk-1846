<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.avatar{border:100px;position:relative;z-index:1;background-color:#FFFFFF;}
		.avatar-wrap{width:100px;height:100px;border:100px;position:relative;border:3px solid #FFFFFF;margin:0 0 3px 0}
		 .box{border:5px;position:relative;z-index:1; background-color:#e8ebec;}
		 .box-wrap{width:750px; height:600px;  border:5px;position:relative;border:0px solid #FFFFFF;margin:0 0 3px 0}
	 a {  font-family:Arial;}
			</style>
	<!-- 	
 		
		.box{border-radius:75px;position:relative;z-index:1; background-image:url(./images/ios-linen.jpg); background-repeat:repeat;}
	 -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Reto Hooptap</title>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

 
 <img src="http://prod.hooptap.com/preview/fb/ranking/heroku_file/images/cabecera_novecento.jpg"  width="765px"></img>
 

<div>    
<ul style=" padding-left: 5px; width:750px;">

<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_fast.php?rid=341');
$con=json_decode($contents); 
$c = count($con);

$s = ($c / 1); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) { 
       $aux+=1;
       $name=explode(" ",$val->nombre);
       $bgcolor = ($aux % 2 === 0) ? '#FCFCFE' : '#e8ebec';
       
      if($val->url != "")
      {
    echo '<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" style="background-color:'.$bgcolor.' ">  '
		    .'<tr><td width="200px" align="center">'
		    .'<a style=" font-size:35px; color:#000000">'.$aux.'.</a>'
		    .'</td> '
		    .' <td width="200px"><div  class="avatar-wrap"><img  class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/' 
		    . $val->url .'.jpg" width="100" height="100"/>'
		    .'</div></td >'
		    . ' <td width="200px">'
		    .'<a style=" font-size:20px; color:#000000"> '.$name[0].' </a>'
			.'</td> ' 
			. ' <td width="150px">'
		    .'<a style="  font-size:20px; color:#000000">&nbsp;&nbsp;&nbsp;'
		    .$val->mark
		    .'</a><br><a style="  font-size:14px; color:#000000;"> segundos </a>'
			.'</td> '
		    .'</tr>'
    	.'</table>';
      }
      else
      {
    echo '<table align="center" width="750" border="0" cellspacing="0" cellpadding="0" style="background-color:'.$bgcolor.'">'
		    .'<tr><td width="200px" align="center">'
		    .'<a style="  font-size:35px; color:#000000;">'.$aux.'.</a>'
		    .'</td> '
		    .' <td width="200px"><div class="avatar-wrap" ><img   class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="100" height="100"/>'
		    .'</div></td >'
		    . ' <td width="200px">'
		    .'<a style="  font-size:20px; color:#000000;"> '.$name[0].' </a>'
			.'</td> ' 
			. ' <td width="150px">'
		    .'<a style="  font-size:20px; color:#000000;">&nbsp;&nbsp;&nbsp;'
		    .$val->mark.'</a><br><a style=" font-size:14px; color:#000000;"> segundos </a>'
			.'</td> '
		    .'</tr>'
    	.'</table>';
      }
}
?>

</table>
</ul>
<div class="fb-comments" data-href="http://prod.hooptap.com/preview/fb/ranking/heroku_file/novecento.php" data-num-posts="2" data-width="750"></div>

</div >

</body>
</html>
