<!-- LIBRARIES -->
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/jquery/jquery.js">
</script>
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/jquery/jquery.cycle.all.min.js">
</script>
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/lightbox/js/jquery.lightbox-0.5.min.js">
</script>
<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-true/lib/lightbox/css/jquery.lightbox-0.5.css" media="screen">
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/mediaelementjs/mediaelement-and-player.js">
</script>

<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-true/lib/mediaelementjs/mediaelementplayer.min.css" />
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/primeplayer/primeplayer_v2.js">
</script>
<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/jscrollpane/jquery.jscrollpane.min.js">
</script>
<link type="text/css" href="/Presentation/VideoPlayer/js/video/sync-true/lib/jscrollpane/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<!--End Library Section – Dont touch order of tags above -->


<!-- YOUR PLAYER -->
<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-true/resources/presentation.css" />

<script type="text/javascript">
  //this starts everything
  $(document).ready(function() {
  prime.init({
  //minimum setup
 uri: 'http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/',
  slidePrefix: 'Slide',
  jpgCase: '.JPG',
  data: window.presentationData,
  //optional
  syncSlides: true
  });
  });
</script>
<!--End Player -->
<!-- PRESENTATION -->
<script src="http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/presentation.js">
</script>
<div id="presentation" style="margin-left:7px;">
  <div id="video">
    <video id="videoplayer" width="470" height="344" poster="http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/video.jpg" controls preload="true">
      <!-- HERE ARE THE NATIVE BROWSER FORMATS FOR EVERYONE BUT WINDOWS SO WE USE FLASH -->
    <!--Below is where you will change the videos -->
      <!-- MP4 source must come first for iOS  -->

      <source type="video/mp4" src="http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/video/video.mp4" />
      <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->

      <source type='video/webm; codecs="vp8, vorbis"' src="http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/video/video.webm" />
      <!-- Ogg/Vorbis for older Firefox and Opera versions -->

      <source type='video/ogg; codecs="theora, vorbis"' src="http://primepresentations.s3.amazonaws.com/2014/ash-vps/x-mpn/1860/video/video.ogv" />
    </video>
  </div>

  <div id="slides">

  </div>

  <div id="thumbs">
  </div>

  <!--  <div id="jump" align="center"><a href="http://google.com" target="_target">Click Here to View Flashcards</a></div>

<div id="toc" style="padding-left:10px;">
                </div>-->
</div>
<!-- END PRESENTATION -->
