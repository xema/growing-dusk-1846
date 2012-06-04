<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
	p {margin: 0; padding: 0;}
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
		<div style="height:112px; margin: 0 auto;"><img src="https://growing-dusk-1846.herokuapp.com/images/logo_hoop_ranking.png" width="181" height="59" style="margin-top: 14px;" /></div>
		</div>
	<div id="informacion" style="background:url(https://growing-dusk-1846.herokuapp.com/images/info.jpg) 0 0 no-repeat; width:784px; height:180px; text-align: center;">
		<div style="width:441px; height: 131px; margin: 0 auto; font-family: Arial, Helvetica, sans-serif; font-size: 14px; text-align: left;">
			<p><b>¿Te mereces ganar una escapada a la costa mediterranea?</b></p>
			<p>Descárgate Hooptap (app gratuita) en tu móvil desde la web www.hooptap.com o captura este QR. Busca el reto Universal Places, resuelve el puzzle y consigue hacerlo en el menor tiempo posible para ganar el premio.</p>
			<p>(El concurso finaliza el 07/06/2012 a las 18:00).</p>
		</div>
	</div>
	<div id="ranking" style="background:url(https://growing-dusk-1846.herokuapp.com/images/fondo.jpg) 0 0 repeat-y; width:784px;">
		<?php 
			$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_buzz.php?rid=145');
			$con=json_decode($contents); 
			
			$c = count($con);
			
			$s = ($c / 1); // change 3 to the number of columns you want to have.
			$aux=0;
			foreach ($con as $val) { 
			   $aux+=1;
			   //$name=explode(" ",$val->nombre);
			   //$bgcolor = ($aux % 2 === 0) ? '#FCFCFE' : '#e8ebec';
					echo '<table align="center" width="129" border="0" cellspacing="0" cellpadding="0" style="margin-right: 45px; float: left;">'
					.'<tr>';
					if($val->url != "")
			  		{
						echo ' <td width="129"><div  class="avatar-wrap" style="width: 125px;margin: 10px;"><img style="border: 5px solid #fff;border-bottom: 45px solid #fff;-webkit-box-shadow: 3px 3px 3px #777; -moz-box-shadow: 3px 3px 3px #777;box-shadow: 3px 3px 3px #777;" src="https://hooptap.s3.amazonaws.com/userprofiles/'
						.$val->url .'.jpg" width="115" height="115" style=""/>';
					 }
      		 		else
			  		{
						echo ' <td width="129"><div class="avatar-wrap" style="background-color:#fff; padding: 4px;"><img   class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="115" height="115" style="margin-bottom: 4px;"/>';
					}
					echo '<p>'.$val->nombre.'</p><p>'.$val->times.'</p></div></td >'
					.'</tr>'
					.'</table>';
		}
?>
</table>
		</ul>
	</div>
	<div id="pie"><img src="https://growing-dusk-1846.herokuapp.com/images/pie.jpg" width="784" height="128" /></div> 
 <div class="fb-comments" data-href="http://growing-dusk-1846.herokuapp.com/rankingII.php" data-num-posts="2" data-width="784"></div>
 </div>
</body>
</html>
