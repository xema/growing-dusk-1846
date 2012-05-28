<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.avatar{border:100px;position:relative;z-index:1;background-color:#FFFFFF; }
		.avatar-wrap{width:100px;height:100px;border:100px;position:relative;border:3px solid #FFFFFF;float: left;}
		 .box{border:5px;position:relative;z-index:1; background-color:#e8ebec;}
		 .box-wrap{width:765px;   border:5px;position:relative;border:0px solid #FFFFFF;margin:0 0 3px 0}
		 .descp{font-family: 'Happy Monkey', cursive; font-size: 14px; font-weight: bold; width: 640px; float: left; color: #666; margin-right: 6px;}
		 .descp a{ color: #000;}
		 UL LI{ width: 734px; float: left; margin-bottom: 5px; margin-left: 16px;}
		 h3{ float: left; width:115px; height: 106px; text-align: center; margin: 0;}
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
 <div class="box box-780 box-wrap"  >
 
 
 <div style=" float: left; width:755px; background-color:#e8ebec; padding-left: 10px; height:120px; border-bottom: 1px solid #999; padding-top: 10px;"><span class="descp"> ¿Te mereces ganar una escapada en la costa mediterránea?<br /><br />
Descárgate Hooptap (app gratuita) en tu móvil desde la web <a href="http://www.hooptap.com" target="_blank">www.hooptap.com</a> o captura este QR. Busca el reto Universal Places, resuelve el puzzle y consigue hacerlo en el menor tiempo posible para ganar el premio. (El concurso finaliza el 07/06/2012 a las 18:00).</span><img src=""  width="96px" height="100px"></img></div>
   
 <div style="width: 760px; float: left; margin-left: 5px;" align="center" >
	<ul style=" padding-left: 2px; list-style: none; float:left;">
		<?php
			$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_fast.php?reto_id=358&type=2');

			//$contents = file_get_contents('http://prod.hooptap.com/preview/fb/omexpo/listnofb.php');
			$con=json_decode($contents);
			 
			$c = count($con);
			
			$s = ($c / 1); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) { 
       $aux+=1;
       //$name=explode(" ",$val->nombre);
       $bgcolor = ($aux % 2 === 0) ? '#FCFCFE' : '#e8ebec';
       
      if($val->url != "")
      {
    echo '<table align="center" width="750px" border="0" cellspacing="0" cellpadding="0" style="background-color:'.$bgcolor.' ">  '
		    .'<tr><td width="115px" align="center">'
		    .'<a style=" font-size:35px; color:#000000">'.$aux.'.</a>'
		    .'</td> '
		    .' <td width="125px"><div  class="avatar-wrap"><img  class="avatar avatar-100 photo" src="https://hooptap.s3.amazonaws.com/userprofiles/' 
		    . $val->url .'.jpg" width="100" height="100"/>'
		    .'</div></td >'
		    . ' <td width="270px">'
		    .'<a style=" font-size:20px; color:#000000"> '.$val->nombre.' </a>'
			.'</td> ' 
			. ' <td width="190px" style="text-align:right">'
		    .'<a style="  font-size:20px; color:#000000; margin-right:20px;">'
		    .$val->times
		    .'</a>'
			.'</td> '
		    .'</tr>'
    	.'</table>';
      }
      else
      {
    echo '<table align="center" width="750" border="0" cellspacing="0" cellpadding="0" style="background-color:'.$bgcolor.'">'
		    .'<tr><td width="115px" align="center">'
		    .'<a style="  font-size:35px; color:#000000;">'.$aux.'.</a>'
		    .'</td> '
		    .' <td width="125px"><div class="avatar-wrap" ><img   class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="100" height="100"/>'
		    .'</div></td >'
		    . ' <td width="270px">'
		    .'<a style="  font-size:20px; color:#000000;"> '.$val->nombre.' </a>'
			.'</td> ' 
			. ' <td width="190px" style="text-align:right">'
		    .'<a style="  font-size:20px; color:#000000; margin-right:20px;">'
		    .$val->times.'</a>'
			.'</td> '
		    .'</tr>'
    	.'</table>';
      }
}
?>
</table>
		</ul>

  </div>

</body>
</html>
