<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href='https://fonts.googleapis.com/css?family=Chango' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<style type="text/css">
		.avatar{border:100px;position:relative;z-index:1;background-color:#FFFFFF;}
		.avatar-wrap{width:100px;height:100px;border:100px;position:relative;border:3px solid #FFFFFF;margin:0 0 3px 0}
		 .box{border:5px;position:relative;z-index:1; background-color:#e8ebec;}
		 .box-wrap{width:765px; height:965px;  border:5px;position:relative;border:0px solid #FFFFFF;margin:0 0 3px 0}
	
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
 
 <img src="http://prod.hooptap.com/preview/fb/ranking/heroku_file/images/cabecera_gin_tapas.jpg"  width="765px"></img>
   
 <div style="width: 100px; float: left; margin-left: 20px;" align="center" >
<ul style=" padding-left: 2px;">
<?php
$contents = file_get_contents('http://prod.hooptap.com/preview/fb/ranking/list_gamer.php?rid=214');

//$contents = file_get_contents('http://prod.hooptap.com/preview/fb/omexpo/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 6); // change 3 to the number of columns you want to have.
$aux=0;
foreach ($con as $val) {
      $aux+=1;
      $name=explode(" ",$val->nombre);
      if($val->url != "")
      {
    echo '<table width="100" border="0" cellspacing="0" cellpadding="0"> <tr><td"><div  class="avatar-wrap">'
    .'<img  class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/' 
		   . $val->url .'.jpg" width="100" height="100"/>'
		       .'</div></td></tr>'
    	.'<tr align="center"><td ><p style="color: #414141; font-size: 10px; font-family: Arial, Helvetica, sans-serif; margin: 0;">'
    	.' <span style="overflow:hidden; color: #000000; font-weight:bold; text-transform:uppercase; display: block; height: 15px; width: 100px;">'
    	.$name[0]
	.'</span></p>'
	.'</td></tr></table>';
      }
      else{
       echo '<table width="100" border="0" cellspacing="0" cellpadding="0"> <tr><td"><div  class="avatar-wrap">'
    .'<img  class="avatar avatar-100 photo" src="http://prod.hooptap.com/media/userprofiles/default.jpg" width="100" height="100"/>'
		       .'</div></td></tr>'
    	.'<tr align="center"><td ><p style="color: #414141; font-size: 10px; font-family: Arial, Helvetica, sans-serif; margin: 0;">'
    	.' <span style="overflow:hidden; color: #000000; font-weight:bold; text-transform:uppercase; display: block; height: 15px; width: 100px;">'
    	.$name[0]
	.'</span></p>'
	.'</td></tr></table>';
      }
    if($i != 0 && $i % $s == 0) 
    {
        ?>
        </ul>
        </div>
       <div style="width: 100px; float: left; margin-left: 20px;">
        <ul style=" padding-left: 5px;">
        <?php
    }
    $i++;
}
?>
</ul>
</div >
<div class="fb-comments" data-href="http://prod.hooptap.com/preview/fb/ranking/heroku_file/gintapas.php" data-num-posts="2" data-width="765"></div>
  </div>

</body>
</html>
