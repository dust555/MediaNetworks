<?php

if(isset($_GET["key"])){
    $key = $_GET["key"];
}
else{
    echo "SET ?key= GET VARIABLE";
}

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><script src="hls.js"></script>

  </head><body cz-shortcut-listen="true"><video id="video" controls="true" src=""></video>
  <script>
    if (Hls.isSupported()) {
      var video = document.getElementById('video');
      var hls = new Hls();
      // bind them together
      hls.attachMedia(video);
      hls.on(Hls.Events.MEDIA_ATTACHED, function () {
        console.log("video and hls.js are now bound together !");
        hls.loadSource("hls/<?php echo $key; ?>.m3u8");
        hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {
          console.log("manifest loaded, found " + data.levels.length + " quality level");
		  //video.play();
        });
      });
    }
  </script></body></html>