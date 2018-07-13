<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>videojs-contrib-hls embed</title>
  
  <!--

  Uses the latest versions of video.js and videojs-contrib-hls.

  To use specific versions, please change the URLs to the form:

  <link href="https://unpkg.com/video.js@5.16.0/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js@5.16.0/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls@4.1.1/dist/videojs-contrib-hls.js"></script>

  -->

  <link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
  <script src="https://unpkg.com/video.js/dist/video.js"></script>
  <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
  
</head>
<body>
  <h1>Video.js Example Embed</h1>

  <video id="my_video_1" class="video-js vjs-default-skin" controls preload="auto" width="640" height="268" 
  data-setup='{}'>
    <source src="http://www.lalinsemarang.info:1935/live/kyaisaleh.stream/playlist.m3u8" type="application/x-mpegURL">
  </video>
  
  <script>
  </script>
  
</body>
</html>