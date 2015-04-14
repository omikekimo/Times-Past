<?php
echo "php is working - database non-existent - scripts running fine with librarys now localised to this server";
echo "current focus: Set up database with one table and establish a visual rep on map using openlayers";

$servername = "localhost";
$username = "root";
$password = "";
$searchbox = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=tp_data;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ": Connected successfully to database"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
	
	$searchbox = $_POST['searchbox'];
	echo $searchbox
	
	
	
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
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" >
				</span>
				<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" >
				</span>
			</div>
		</div>
	</div>
	<br>
	
	

		<div class="midcontainer">
	
			<div class="pageleft">
				<form action="" method="GET">
					<input type="text" id="startdate" name="startdate">
				</form>
			</div>	
	
			<div class="pagemiddle">
				<form action="index.php" method="POST">
					<input type="text" id="searchbox" text="search" name="searchbox">
				</form>
			</div>	
	
			<div class="pageright">
				<form action="" method="GET">
					<input type="text" id="enddate" name="enddate">
				</form>
			</div>	
		</div>
	
	



	
	
   
<div id="map" class="map"></div>
    <script type="text/javascript">
       // init map
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                    source: new ol.source.MapQuest({layer: 'osm'}) // Street mapa -> osm
                })
            ],
            // pos on map
            view: new ol.View({
                center: ol.proj.transform([17.813988, 43.342019], 'EPSG:4326', 'EPSG:3857'), 
                zoom: 3
            })
        });
    
    
    
    
        var vectorSource = new ol.source.Vector({
            //create empty vector
        });
    
        var markers = [];
    
        function AddMarkers() {
            //create a bunch of icons and add to source vector
            for (var i=0;i<50;i++){
                var x= Math.random()*360-180;
                var y= Math.random()*180-90;
    
                var iconFeature = new ol.Feature({
                    geometry: new ol.geom.Point(ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857')),
                    name: 'Marker ' + i
                });
                markers[i]= ol.proj.transform([x,y], 'EPSG:4326',   'EPSG:3857');
                vectorSource.addFeature(iconFeature);
            }
    
            //create the style
            var iconStyle = new ol.style.Style({
                image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
                    anchor: [0.5, 46],
                    anchorXUnits: 'fraction',
                    anchorYUnits: 'pixels',
                    opacity: 0.75,
                    src: 'http://upload.wikimedia.org/wikipedia/commons/a/ab/Warning_icon.png'
                }))
            });
    
    
    
            //add the feature vector to the layer vector, and apply a style to whole layer
            var vectorLayer = new ol.layer.Vector({
                source: vectorSource,
                style: iconStyle
            });
            return vectorLayer;
        }
        
    
        var layerMarkers = AddMarkers();

var layerLines = new ol.layer.Vector({
    source: new ol.source.Vector({
        features: [new ol.Feature({
            geometry: new ol.geom.LineString(markers, 'XY'),
            name: 'Line'
        })]
    })
});
        map.addLayer(layerMarkers);
        map.addLayer(layerLines);
        console.log(layerLines.getSource());
    
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
	values: [ 0, 100	]
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