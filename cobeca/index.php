<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<script src="https://maps-api-ssl.google.com/maps/api/js?v=3&sensor=false" type="text/javascript"></script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(39.470628, -0.376246);
	var lbaldo = new google.maps.LatLng(39.468494, -0.37583);
	var lnove = new google.maps.LatLng(39.470751,  -0.368807);
	var lcasa = new google.maps.LatLng(39.468465, -0.375296);
	var lmarquis = new google.maps.LatLng(39.472959, -0.374482);
	var lclan = new google.maps.LatLng(39.472959, -0.374382);
	var lgin = new google.maps.LatLng(39.46838, -0.382888);
	var lhostal = new google.maps.LatLng(39.46838, -0.382788);
    var myOptions = {
      zoom: 16,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		
	var mbaldo = new google.maps.Marker({
      position: lbaldo, 
      map: map, 
      title:"Baldo"
  }); 
  
  	var mnove = new google.maps.Marker({
      position: lnove, 
      map: map, 
      title:"Novecento"
  }); 
  
  	var mcasa = new google.maps.Marker({
      position: lcasa, 
      map: map, 
      title:"La casa Blanca"
  }); 
  
  	var mmarquis = new google.maps.Marker({
      position: lmarquis, 
      map: map, 
      title:"Le Marquis"
  }); 
  
  	var mclan = new google.maps.Marker({
      position: lclan, 
      map: map, 
      title:"Clandestino"
  }); 
  
  	var mgin = new google.maps.Marker({
      position: lgin, 
      map: map, 
      title:"Gin Tapas"
  }); 
  	
	var mhostal = new google.maps.Marker({
      position: lhostal, 
      map: map, 
      title:"L'Hostal"
  }); 
	
	
	var contentStringbaldo = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>Cerveceria Baldo</b></p>'+
    '<div id="bodyContent">'+
    '<p>Calle Ribera 5, Valencia</p>' +
    '<p>T. 963 511 561</p>'+
    '<p><a href="http://www.cerveceriabaldo.com/" target="_blank">'+
    'www.cerveceriabaldo.com</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringnove = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>Novecento Bar</b></p>'+
    '<div id="bodyContent">'+
    '<p>Calle Conde Salvatierra 9, Valencia</p>' +
    '<p>T. 963 106 939</p>'+
    '<p><a href="http://www.novecentobar.com/" target="_blank">'+
    'www.novecentobar.com</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringcasa = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>La Casa Blanca</b></p>'+
    '<div id="bodyContent">'+
    '<p>Paseo de Ruzafa 10, Valencia</p>' +
    '<p>T. 963 511 250</p>'+
    '<p><a href="http://www.lacasablancaclub.com/" target="_blank">'+
    'www.www.lacasablancaclub</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringmarquis = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>Le Marquis</b></p>'+
    '<div id="bodyContent">'+
    '<p>Marqués de Dos Aguas 6, Valencia</p>' +
    '<p>T. 963 529 938</p>'+
    '<p><a href="http://www.lemarquis.es/" target="_blank">'+
    'www.lemarquis.es</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringclan = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>Clandestino Bar</b></p>'+
    '<div id="bodyContent">'+
    '<p>Marqués de Dos Aguas 6, Valencia</p>' +
    '<p>T. 963 529 938</p>'+
    '<p><a href="http://www.clandestinobar.es/" target="_blank">'+
    'www.www.clandestinobar.es</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringgin = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>GIN TAPAS</b></p>'+
    '<div id="bodyContent">'+
    '<p>Plaza Vannes 7, Valencia</p>' +
    '<p>T. 963 940 517</p>'+
    '<p><a href="http://www.gintapas.com/" target="_blank">'+
    'www.gintapas.com</a></p>'+
    '</div>'+
    '</div>';
	
	var contentStringhostal = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<p><b>L Hostalet</b></p>'+
    '<div id="bodyContent">'+
    '<p>Plaza Vannes 5, Valencia</p>' +
    '<p>T. 963 514 859</p>'+
    '<p><a href="http://www.cobeca.es/hostalet" target="_blank">'+
    'www.cobeca.es/hostalet</a></p>'+
    '</div>'+
    '</div>';

var infowindowbaldo = new google.maps.InfoWindow({
    content: contentStringbaldo
});

var infowindownove = new google.maps.InfoWindow({
    content: contentStringnove
});

var infowindowcasa = new google.maps.InfoWindow({
    content: contentStringcasa
});

var infowindowmarquis = new google.maps.InfoWindow({
    content: contentStringmarquis
});

var infowindowclan = new google.maps.InfoWindow({
    content: contentStringclan
});

var infowindowgin = new google.maps.InfoWindow({
    content: contentStringgin
});

var infowindowhostal = new google.maps.InfoWindow({
    content: contentStringhostal
});

google.maps.event.addListener(mbaldo, 'click', function() {
  infowindowbaldo.open(map,mbaldo);
});

google.maps.event.addListener(mnove, 'click', function() {
  infowindownove.open(map,mnove);
});

google.maps.event.addListener(mcasa, 'click', function() {
  infowindowcasa.open(map,mcasa);
});

google.maps.event.addListener(mmarquis, 'click', function() {
  infowindowmarquis.open(map,mmarquis);
});

google.maps.event.addListener(mclan, 'click', function() {
  infowindowclan.open(map,mclan);
});

google.maps.event.addListener(mgin, 'click', function() {
  infowindowgin.open(map,mgin);
});

google.maps.event.addListener(mhostal, 'click', function() {
  infowindowhostal.open(map,mhostal);
});
  }

</script>
<style>
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em,
font, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody,
tfoot, thead, tr, th, td {
    border:0pt none;
    font-family:inherit;
    font-size:100%;
    font-style:inherit;
    font-weight:inherit;
    margin:0pt;
    padding:0pt;
    vertical-align:baseline;
}
body{
    line-height: 1em;
    font-size: 14px;
    background: #262626;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0pt;
    cursor: default;
    color: #fff;
}
table{
    border-collapse: separate;
    border-spacing: 0pt;
}
strong{
    font-weight: 700;
}
caption, th, td{
    font-weight:normal;
    text-align:left;
}
blockquote:before, blockquote:after, q:before, q:after{
    content:"";
}
blockquote, q{
    quotes:"" "";
}
pre{
    font-family: Arial, Helvetica, sans-serif;
}
input{
    border: 0;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}
textarea{
    font-family: Arial, Helvetica, sans-serif;
    color: #888888;
    padding: 7px 3px 0 4px;
    font-size: 11px;
}
select{
    font-size: 11px;
    color: #888888;
    background: #fff;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid #CAD2CE;
}
ul{
    list-style: none;
    list-style-type: none;
    list-style-position: outside;
}
a{
    cursor: pointer;
    color: #666666;
    text-decoration: underline;
    outline: none !Important;
}
html,body{
    height:100%;
}
.clear{
    clear: both;
    height: 0;
    visibility: hidden;
    display: block;
    line-height: 0;
}
.clearfix{
    overflow: hidden;
}
.italic{
    font-style: italic;
}
.content{
    margin:0pt auto;
    background:#efefef;
    background:#171717;
    border:1px solid #3e3e3e;
    text-align:left;
    padding:1.3em;
    padding-bottom:20px;
    font-size:12px;
    line-height:2em;
    color:#8C8C8C;
    border-radius:0 5px 5px 5px;
    -moz-border-radius:0 5px 5px 5px;
    -webkit-border-radius:0 5px 5px 5px;
	display:none;
	width: 750px;
}
.content.baldo{
	display: block;
}
ul{
    list-style:none;
    list-style-position:outside;
	margin:0 auto;
	width: 750px;
}
ul.menu li{
    float:left;
    margin-right:5px;
    margin-bottom:-1px;
}
ul.menu li{
    font-weight:700;
    display:block;
    padding:10px 11px;
    background:#303030;
    margin-bottom:-1px;
    border:1px solid #3e3e3e;
    border-width:1px 1px 1px 1px;
    position:relative;
    color:#e4e1cd;
    cursor:pointer;
    border-radius:3px 3px 0 0;
    -moz-border-radius:3px 3px 0 0;
    -webkit-border-radius:3px 3px 0 0;
	font-size: 11px;
}
ul.menu li:hover{
    color:#fff;
}
ul.menu li.active{
    background:#171717;
    top:1px;
    border-bottom:0;
    color:#fff;
}

ul.botones li{
	margin-bottom: 11px;
}
</style>
</head>

<body  onload="initialize()">
<div>
	 <ul class="menu">
		<li id="baldo" class="active">Baldo</li>
		<li id="novecento">Novecento</li>
		<li id="casablanca">La Casa Blanca</li>
		<li id="lemarquis">Lemarquis</li>
		<li id="clandestino">Clandestino</li>
		<li id="gintapas">Gin Tapas</li>
		<li id="hostalet">L'Hostalet</li>
		<li id="catering">Catering</li>
		<li id="mapa">Mapa</li>
	</ul>
   <span class="clear"></span>
   <div class="content baldo">
       <img src="images/baldo.jpg" alt="Baldo" />
	   <div style="float:left"><img src="images/baldot.jpg" /></div>
	   <div style="float:left; background-color: #000000; width: 351px; height: 254px;">
	   		<ul class="botones" style="width: 304px; margin-top: 70px;">
				<li><a href="menu_baldo.pdf" target="_blank"><img src="images/bt_menu_rn.png" alt="Menu baldo" width="304" height="48" /></a></li>
				<li><a href="http://www.cerveceriabaldo.com/" target="_blank"><img src="images/bt_baldo.png" alt="baldo" width="304" height="48"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content novecento">
       <img src="images/novecento.jpg" alt="novecento" />
	   <div style="float:left"><img src="images/novecentot.jpg" /></div>
	   <div style="float:left; background-color: #000000; width: 355px; height: 258px;">
	   		<ul class="botones" style="width: 316px; margin-top: 35px;">
				<li><a href="carta_900.pdf" target="_blank"><img src="images/bt_carta_g.png" alt="Menu novecento" width="316" height="50"/></a></li>
				<li><a href="menu_900.pdf" target="_blank"><img src="images/bt_menu_g.png" alt="novecento" width="316" height="50"/></a></li>
				<li><a href="http://www.novecentobar.com/" target="_blank"><img src="images/bt_novecento.png" alt="novecento" width="316" height="50"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content casablanca">
        <img src="images/casablanca.jpg" alt="casablanca" />
	   <div style="float:left"><img src="images/casablancat.jpg" /></div>
	   <div style="float:left; background-color: #000000; width: 369px; height: 270px;">
	   		<ul class="botones" style="width: 305px; margin-top: 70px;">
				<li><a href="menu_casa.pdf" target="_blank"><img src="images/bt_menugr_r.png" alt="Menu Casa Blanca" width="305" height="49" /></a></li>
				<li><a href="http://www.lacasablancaclub.com/" target="_blank"><img src="images/bt_casab.png" alt="Casa Blanca" width="305" height="49"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content lemarquis">
        <img src="images/lemarquis.jpg" alt="lemarquis" />
	   <div style="float:left"><img src="images/lemarquist.jpg" /></div>
	   <div style="float:left; background-color: #fff; width: 320px; height: 156px;">
	   		<ul class="botones" style="width: 205px; margin-top: 5px;">
				<li><a href="carta_lemarquis.pdf" target="_blank"><img src="images/bt_carta_n.png" alt="Lemarquis" width="205" height="34"/></a></li>
				<li><a href="menu_lemarquis.pdf" target="_blank"><img src="images/bt_menugr_n.png" alt="Lemarquis" width="205" height="34"/></a></li>
				<li><a href="http://www.lemarquis.es/" target="_blank"><img src="images/bt_lemarquis.png" alt="Lemarquis" width="205" height="34"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content clandestino">
        <img src="images/clandestino.jpg" alt="clandestino" />
	   <div style="float:left"><img src="images/clandestinot.jpg" /></div>
	   <div style="float:left; background-color: #000000; width: 365px; height: 266px;">
	   		<ul class="botones" style="width: 316px; margin-top: 35px;">
				<li><a href="carta_clandestino.pdf" target="_blank"><img src="images/bt_carta_na.png" alt="clandestino" width="316" height="51"/></a></li>
				<li><a href="menu_clandestino.pdf" target="_blank"><img src="images/bt_menu_na.png" alt="clandestino" width="316" height="51"/></a></li>
				<li><a href="http://www.clandestinobar.es/" target="_blank"><img src="images/bt_clandestino.png" alt="clandestino" width="316" height="51"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content gintapas">
       <img src="images/gintapas.jpg" alt="gintapas" />
	   <div style="float:left"><img src="images/gintapast.jpg" /></div>
	   <div style="float:left; background-color: #fff; width: 392px; height: 272px;">
	   		<ul class="botones" style="width: 316px; margin-top: 35px;">
				<li><a href="carta_gintapas.pdf" target="_blank"><img src="images/bt_carta_l.png" alt="gintapas" width="316" height="52"/></a></li>
				<li><a href="menu_gintapas.pdf" target="_blank"><img src="images/bt_menu_l.png" alt="gintapas" width="316" height="52"/></a></li>
				<li><a href="http://www.gintapas.com/" target="_blank"><img src="images/bt_gintapas.png" alt="gintapas" width="316" height="52"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content hostalet">
        <img src="images/hostalet.jpg" alt="hostalet" />
	   <div style="float:left"><img src="images/hostalett.jpg" /></div>
	   <div style="float:left; background-color: #fff; width: 381px; height: 266px;">
	   		<ul class="botones" style="width: 316px; margin-top: 35px;">
				<li><a href="carta_hostalet.pdf" target="_blank"><img src="images/bt_carta_rb.png" alt="hostalet" width="316" height="52"/></a></li>
				<li><a href="menu_hostalet.pdf" target="_blank"><img src="images/bt_menu_rb.png" alt="hostalet" width="316" height="52"/></a></li>
				<li><a href="http://www.cobeca.es/hostalet" target="_blank"><img src="images/bt_hostalet.png" alt="hostalet" width="316" height="52"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content catering">
        <img src="images/catering.jpg" alt="catering" />
	   <div style="float:left"><img src="images/cateringt.jpg" /></div>
	   <div style="float:left; background-color: #000000; width: 343px; height: 254px;">
	   		<ul class="botones" style="width: 304px; margin-top: 70px;">
				<li><a href="http://www.cobecacatering.com/formulario.html" target="_blank"><img src="images/bt_presupuesto_r.png" alt="catering" width="304" height="49" /></a></li>
				<li><a href="http://www.cobecacatering.com/" target="_blank"><img src="images/bt_catering.png" alt="catering" width="304" height="49"/></a></li>
			</ul>
	   </div>
	   <span class="clear"></span>
   </div>
   <div class="content mapa">
	   <div id="map_canvas" style="width: 750px; height: 400px;">
	   </div>
	   <span class="clear"></span>
   </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">$(document).ready(function(){
    $(".menu > li").click(function(e){
        var a = e.target.id;
        //desactivamos seccion y activamos elemento de menu
        $(".menu li.active").removeClass("active");
        $(".menu #"+a).addClass("active");
        //ocultamos divisiones, mostramos la seleccionada
        $(".content").css("display", "none");
        $("."+a).fadeIn();
		initialize();
    });
});</script>

</body>
</html>
