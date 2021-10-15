<?php

if(isset($_GET["key"])){
    $key = $_GET["key"];
}
else{
    echo "SET ?key= GET VARIABLE";
}

?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>Adaptive Streaming in HTML5</title>
  
	<!-- DASH-AVC/265 reference implementation -->
	<script src="dash.all.js"></script>
  
	<script>
		// setup the video element and attach it to the Dash player
		function setupVideo() {
		  var url = "dash/<?php echo $key; ?>.mpd";
		  var context = new Dash.di.DashContext();
		  var player = new MediaPlayer(context);
						  player.startup();
						  player.attachView(document.querySelector("#videoplayer"));
						  player.attachSource(url);
		}
		
		
	</script>
  
  
  </head>
  <body onload="setupVideo()">
    <h1>Adaptive Streaming with HTML5</h1>
    <video id="videoplayer" controls=""></video>
  


</body></html>