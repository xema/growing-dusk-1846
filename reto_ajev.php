<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='http://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.avatar{border:210px;position:relative;z-index:1;background-color:#FFFFFF;}
		.avatar-wrap{width:210px;height:210px;border:210px;position:relative;border:3px solid #FFFFFF;margin:0 0 0px 0}
		 .box{border:5px;position:relative;z-index:1; background-color:#e8ebec;}
		 .box-wrap{width:765px;   border:5px;position:relative;border:0px solid #FFFFFF;margin:0 0 3px 0}
		 .descp{font-family: 'Happy Monkey', cursive; font-size: 14px; font-weight: bold; width: 640px; float: left; color: #666; margin-right: 6px;}
		 .descp a{ color: #000;}
		 UL LI{ display: inline; width: 250px; float: left; margin-bottom: 5px;}
	
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
 
 <img src="http://growing-dusk-1846.herokuapp.com/images/cabecera_ajev.jpg"  width="765px"></img>
 <div style=" float: left; width:755px; background-color:#e8ebec; padding-left: 10px; height:120px; border-bottom: 1px solid #999; padding-top: 10px;"><span class="descp">¿Quieres ganar una inscripción gratuita a los talleres, foros y seminarios AJEV durante todo 2012?<br /><br />
Descárgate Hooptap (app gratuita) en tu móvil desde la web <a href="www.hooptap.com" target="_blank">www.hooptap.com</a> o captura este QR. Busca el reto ¿Crees que eres emprendedor? y ¡participa!</span><img src="http://growing-dusk-1846.herokuapp.com/images/qr.jpg"  width="96px" height="100px"></img></div>
 <div style="width: 760px; float: left; margin-left: 5px;" align="center" >
	<ul style=" padding-left: 2px; list-style: none;">
		<?php
		$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_photo.php?rid=337');
		
		//$contents = file_get_contents('http://prod.hooptap.com/preview/fb/omexpo/listnofb.php');
		$con=json_decode($contents);
		 
		$c = count($con);
		
		$s = ($c / 3); // change 3 to the number of columns you want to have.
		$aux=0;
		foreach ($con as $val) {
			  $aux+=1;
			  $name=explode(" ",$val->nombre);
			  if($val->url != "")
			  {
			echo '<li><div  class="avatar-wrap">'
			.'<img  class="avatar avatar-100 photo" src="'. $val->url .'" width="210" height="210"/>'
					   .'</div>'
				.'<p style="color: #414141; font-size: 10px; font-family: Arial, Helvetica, sans-serif; margin: 0;">'
				.' <span style="overflow:hidden; color: #000000; font-weight:bold; text-transform:uppercase; display: block; height: 15px; width: 210px;">'
				.$name[0]
			.'</span></p>'
			.'</li>';
			  }
			  else{
			   echo '<li><div  class="avatar-wrap">'
			.'<img  class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="100" height="100"/>'
					   .'</div>'
				.'<p style="color: #414141; font-size: 10px; font-family: Arial, Helvetica, sans-serif; margin: 0;">'
				.' <span style="overflow:hidden; color: #000000; font-weight:bold; text-transform:uppercase; display: block; height: 15px; width: 100px;">'
				.$name[0]
			.'</span></p>'
			.'</li>';
			  }
			if($i != 0 && $i % $s == 0) 
			{
				?>
        	<?php
    			}
    		$i++;
			}
			?>
		</ul>
	</div >
<div class="fb-comments" data-href="http://growing-dusk-1846.herokuapp.com/reto_ajev.php" data-num-posts="2" data-width="760"></div>
</div>

</body>
</html>
