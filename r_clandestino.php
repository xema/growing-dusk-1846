<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
	body{font-family: Arial, Helvetica, sans-serif; }
	.avatar{border:100px;position:relative;z-index:1;background-color:#FFFFFF; }
	.avatar-wrap{width:100px;height:100px;border:100px;position:relative;border:3px solid #FFFFFF;float: left;}
	.box{border:5px;position:relative;z-index:1; background-color:#e8ebec;}
	.box-wrap{width:765px;   border:5px;position:relative;border:0px solid #FFFFFF;margin:0 0 3px 0}
	.descp{font-family: 'Happy Monkey', cursive; font-size: 14px; font-weight: bold; width: 640px; float: left; color: #666; margin-right: 6px;}
	.descp a{ color: #000;}
	UL LI{ width: 734px; float: left; margin-bottom: 5px; margin-left: 16px;}
	h3{ float: left; width:115px; height: 106px; text-align: center; margin: 0;}
	a {  font-family:Arial;}	
	p {margin: 0; padding: 0;}
	.pos1{ margin-left: 108px!important;}
	.pos2{}
	.pos3{ margin-right:40px!important}
</style>
<title>Documento sin t&iacute;tulo</title>
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
 <div>
 	<div id="cabecera" style="background:url(https://growing-dusk-1846.herokuapp.com/images/cabecera.jpg) 0 0 no-repeat; width:784px; text-align: center;">
		<div style="height:112px; margin: 0 auto;"><img src="https://growing-dusk-1846.herokuapp.com/images/clandestino.png" width="181" height="59" style="margin-top: 14px;" /></div>
		</div>
	<div id="informacion" style="background:url(https://growing-dusk-1846.herokuapp.com/images/info.jpg) 0 0 no-repeat; width:784px; height:180px; text-align: center;">
		<div style="width:425px; height: 131px; margin: 0 auto; font-size: 14px; text-align: left;">
			<p style="margin-left: 6px;line-height: 18px;padding-top: 18px;">¿Serás tu el ganador de esta semana? Cobeca premia con un cocktail en Clandestino al más rápido en resolver el puzzle. Descárgate Hooptap en tu móvil (app gratuita) disponible en la Apple Store o desde el Market de Android, busca los juegos del Grupo Cobeca y ¡se el más rápido!</b>!</p>
			<p style="margin-left: 6px;margin-top: 4px;">(El concurso finaliza el 18/06/2012 a las 18:00).</p>
		</div>
	</div>
	<div id="ranking" style="background:url(https://growing-dusk-1846.herokuapp.com/images/fondo.jpg) 0 0 repeat-y; width:700px; padding: 0 46px 20px 46px; ">
		<?php 
			$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_fastfast.php?reto_id=471');
			$con=json_decode($contents); 
			
			if($con->status == 'win')
			{
				$ganador = $con->user_win;
			}

			$aux=0;
			foreach ($con->usuarios as $val) { 
			   $aux+=1;
			   //$name=explode(" ",$val->nombre);
			   //$bgcolor = ($aux % 2 === 0) ? '#FCFCFE' : '#e8ebec';
			   	if($aux<4)
				{
					if($val->img != "")
			  		{
						echo '<div class="pos'.$aux.'" style="width: 125px;margin: 20px 30px 20px 20px;position: relative; float: left;"><span style="background:url(https://growing-dusk-1846.herokuapp.com/images/pos'.$aux.'.png) 0 0 no-repeat;width: 43px;height: 76px; position:absolute;top:-8px;left:103px"></span><img style="border: 5px solid #fff;border-bottom: 45px solid #fff;-webkit-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1); -moz-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);" src="'
						.$val->img .'" width="119" height="119" style=""/>';
					 }
      		 		else
			  		{
						echo '<div class="pos'.$aux.'" style="width: 125px;margin: 20px 30px 20px 20px;position: relative; float: left;"><span style="background:url(https://growing-dusk-1846.herokuapp.com/images/pos'.$aux.'.png) 0 0 no-repeat;width: 43px;height: 76px; position:absolute;top:-8px;left:103px"></span><img style="border: 5px solid #fff;border-bottom: 45px solid #fff;-webkit-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1); -moz-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);" src="http://prod.hooptap.com/media/userprofiles/defranking.jpg" width="119" height="119" style=""/>';
					}
					echo '<p style="position: absolute;text-align: center;width: 115px;margin-left:5px;bottom: 23px;overflow: hidden;height: 15px; text-transform:capitalize; font-size: 13px;"><b>'.utf8_decode($val->username).'</b></p><p style="position: absolute;text-align: center;width: 100%;bottom: 5px;overflow: hidden;height: 18px;font-size: 12px;font-weight: 600; color: #4a4a4a;">'.$val->tiempo.' Victorias</p></div>';
				}
				else{
					if($val->img != "")
			  		{
						echo '<div style="width: 125px;margin: 20px 30px 20px 20px;position: relative; float: left;"><img style="border: 5px solid #fff;border-bottom: 45px solid #fff;-webkit-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1); -moz-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);" src="'.$val->img .'" width="119" height="119" style=""/>';
					 }
      		 		else
			  		{
						echo '<div style="width: 125px;margin: 20px 30px 20px 20px;position: relative; float: left;"><img style="border: 5px solid #fff;border-bottom: 45px solid #fff;-webkit-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1); -moz-box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);box-shadow: 1px 4px 12px rgba(0, 0, 0, 1);" src="http://prod.hooptap.com/media/userprofiles/defranking.jpg" width="119" height="119" style=""/>';
					}
					echo '<p style="position: absolute;text-align: center;width: 115px;margin-left:5px;bottom: 23px;overflow: hidden;height: 15px; text-transform:capitalize; font-size: 13px;"><b>'.utf8_decode($val->username).'</b></p><p style="position: absolute;text-align: center;width: 100%;bottom: 5px;overflow: hidden;height: 18px;font-size: 12px;font-weight: 600; color: #4a4a4a;">'.$val->tiempo.' Victorias</p></div>';
		}}
?>
	<div style="clear: both;"></div>
	</div>
	<div id="pie"><img src="https://growing-dusk-1846.herokuapp.com/images/pie.jpg" width="784" height="128" /></div> 
 <div class="fb-comments" data-href="http://growing-dusk-1846.herokuapp.com/rankingII.php" data-num-posts="2" data-width="784"></div>
 </div>
</body>
</html>
