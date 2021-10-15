Online player (for streams on webserver with public ip address):  
  
http://demo.theoplayer.com/test-your-stream-with-statistics (Koppelingen naar een externe site.)  
  
  
   
  
Upload these files to your webserver and change the html file to point at the correct playlist file.  
  
Remember that HLS only supports h264 (and h265) video. Add -c:v libx264 to your ffmpeg command to set the output codec to h264.  