<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reto Createsse Hooptap</title>
</head>
<body style="margin:0; padding:0;">

<div style="margin:0; padding:0; width:520px; height:630px; background:#ffffff 	url(http://176.34.252.128/preview/fb/createsse/images/CREATESSE.png) no-repeat left top; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF;">
        	
            <div style="padding:211px 0 0 90px;">
			<a href="http://itunes.apple.com/es/app/hooptap/id465650148?mt=8" target="blank"><img  src="http://176.34.252.128/preview/fb/createsse/images/HoopTap-AppleStore.png"    alt="" /></a><br />
			<a style="padding:0 0 0 0;" href="https://market.android.com/details?id=com.bervimo.Hooptap&feature=search_result#?t=W251bGwsMSwyLDEsImNvbS5iZXJ2aW1vLkhvb3B0YXAiXQ.." target="blank"><img  src="http://176.34.252.128/preview/fb/createsse/images/HoopTap-Android.png"    alt="" /></a>
	    </div>
        <div style="clear:both;"></div>
</div>


<div style="width:180px; float:left;">
<ul>
<?php

$contents = file_get_contents('http://prod.hooptap.com/preview/fb/createsse/listnofb.php');
$con=json_decode($contents);
 
$c = count($con);

$s = ($c / 1); // change 3 to the number of columns you want to have.

foreach ($con as $val) {
    echo '<table border="0"> <tr><td><img src="' . $val . '" width="350" height="250"/></td></tr>'
    .'<tr align="center"><td ><iframe src="//www.facebook.com/plugins/like.php?href=' . $val . '&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21&amp;appId=360540313963881" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe></td></tr>'
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
}

?>

</ul>
</div >


</body>
</html>
