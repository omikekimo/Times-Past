<?php
echo "php is working - database virtually non-existent - scripts running fine with librarys"
?>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta property="og:title" content="Times Past - History at your fingertips" /> 
	<meta property="og:description" content="" /> 
	<meta property="og:image" content="images/logo.jpg" /> 
	<meta name="title" content="Times Past - History at your fingertips" />
	<meta name="description" content="" />
	<link rel="image_src" href="images/logo.jpg" / >
	<link rel="stylesheet" href="css/ol.css" type="text/css">
	<link href="jqueryui/jquery-ui.css" rel="stylesheet"/>
	<link href="css/main.css" rel="stylesheet"/>
    <script src="ol.js" type="text/javascript"></script>
	<script src="jqueryui/external/jquery/jquery.js"></script>
	<script src="jqueryui/jquery-ui.js"></script>


	<title>Times Past - History at your fingertips</title>
	
</head>
  

<body>
<div class="wrapper">


	<div class="header">
		<div class="logobox">
			<img class="logo" src="images/logo.jpg"/>
		</div>
		
		<div class="pagetop">
			<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
				<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 17%; width: 50%;">
				</div>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 17%;">
				</span>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 67%;">
				</span>
			</div>
		</div>
	</div>
	<br>
	
	<div class="center">

		<div class="midcontainer">
	
			<div class="pageleft">
			v
			</div>	
	
			<div class="pagemiddle">
			v
			</div>	
	
			<div class="pageright">
			v
			</div>	
		</div>
	</div>
	



	<div class="middle">
	

	</div>
	
    <div class="center">

	</div>
<div id="map" class="map"></div>
    <script type="text/javascript">
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.MapQuest({layer: 'sat'})
          })
        ],
        view: new ol.View({
          center: ol.proj.transform([37.41, 8.82], 'EPSG:4326', 'EPSG:3857'),
          zoom: 4
        })
      });
    </script>
    <div class="maintext">

	
	
	</div>
	
	
	<br>
	
	<div class="footer">
		<div class="pagefooter">
			<a href=""><img class="socmed" src="images/facebook.png" alt="Add Us on Facebook"/></a>
			<a href=""><img class="socmed" src="images/googleplus.png" alt="Add Us on Google+"/></a>
			<a href=""><img class="socmed" src="images/twitter.png" alt="Follow Us on Twitter"/></a>
			<a href="http://twitter.com/share?text=Times%20Past&url=https://www.facebook.com/timespastapp"> <img class="socshare" src="images/pop_twitter.png"></a>
			<a href="http://www.facebook.com/sharer.php?u=https://www.facebook.com/timespastapp"><img class="socshare"src="images/pop_facebook.png"></a>
		</div>	
	</div>
</div>
</body>
  	<script>

$( "#accordion" ).accordion();



var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#autocomplete" ).autocomplete({
	source: availableTags
});



$( "#button" ).button();
$( "#radioset" ).buttonset();



$( "#tabs" ).tabs();



$( "#dialog" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		},
		{
			text: "Cancel",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
	]
});

// Link to open the dialog
$( "#dialog-link" ).click(function( event ) {
	$( "#dialog" ).dialog( "open" );
	event.preventDefault();
});



$( "#datepicker" ).datepicker({
	inline: true
});



$( "#slider" ).slider({
	range: true,
	values: [ 17, 67 ]
});



$( "#progressbar" ).progressbar({
	value: 20
});



$( "#spinner" ).spinner();



$( "#menu" ).menu();



$( "#tooltip" ).tooltip();



$( "#selectmenu" ).selectmenu();


// Hover states on the static widgets
$( "#dialog-link, #icons li" ).hover(
	function() {
		$( this ).addClass( "ui-state-hover" );
	},
	function() {
		$( this ).removeClass( "ui-state-hover" );
	}
);
</script>

  

</html>