<script src="/Presentation/VideoPlayer/js/video/sync-false/lib/jquery/jquery.js">

</script>

<script src="/Presentation/VideoPlayer/js/video/sync-false/lib/jquery/jquery.cycle.all.min.js">

</script>


<script src="/Presentation/VideoPlayer/js/video/sync-false/lib/lightbox/js/jquery.lightbox-0.5.min.js"> 

</script>

<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-false/lib/lightbox/css/jquery.lightbox-0.5.css" media="screen"> 


<script src="/Presentation/VideoPlayer/js/video/sync-false/lib/mediaelementjs/mediaelement-and-player.js">

</script>



<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-false/lib/mediaelementjs/mediaelementplayer.min.css" />

<script src="/Presentation/VideoPlayer/js/video/sync-true/lib/primeplayer/primeplayer_v2.js">
</script>

<script src="/Presentation/VideoPlayer/js/video/sync-false/lib/jscrollpane/jquery.jscrollpane.min.js">

</script>

<link type="text/css" href="/Presentation/VideoPlayer/js/video/sync-false/lib/jscrollpane/jquery.jscrollpane.css" rel="stylesheet" media="all" />

<!--End Library Section – Don't touch order of tags above -->

<!-- YOUR PLAYER -->

<link rel="stylesheet" href="/Presentation/VideoPlayer/js/video/sync-false/resources/presentation-slidesonly.css" />

<script type="text/javascript">
  //this starts everything
  $(document).ready(function() {
  prime.init({
  //minimum setup
 uri: 'http://primepresentations.s3.amazonaws.com/2014/esh/pds/Besses/',
  slidePrefix: 'Slide',
  jpgCase: '.JPG',
  data: window.presentationData,
  //optional
  syncSlides: false
  });
  });
</script>

<!--End Player -->

<!-- PRESENTATION -->

<script src="http://primepresentations.s3.amazonaws.com/2014/esh/pds/Besses/presentation.js">

</script>

<div id="presentation" style="margin-left:7px;">

   <!-- <div id="video">-->

    <!--<video id="videoplayer" width="460" height="344" poster="http://primepresentations.s3.amazonaws.com/2011/sabcs-sanantonio/dcu/advanced/video/9_1300_Ver_Rug_FINAL.mov.jpg" controls="controls" preload="true">-->

      <!-- HERE ARE THE NATIVE BROWSER FORMATS FOR EVERYONE BUT WINDOWS SO WE USE FLASH -->

<!--Below is where you will change the videos -->

      <!-- MP4 source must come first for iOS  -->



       <!-- <source type="video/mp4" src="" />-->

      <!-- WebM/VP8 for Firefox4, Opera, and Chrome -->



      <!-- <source type='video/webm; codecs="vp8, vorbis"' src="" />-->

      <!-- Ogg/Vorbis for older Firefox and Opera versions -->



       <!-- <source type='video/ogg; codecs="theora, vorbis"' src="" />-->

     <!-- </video>-->

  </div>



  <div id="slides">



  </div>



  <div id="thumbs" style="margin-left:15px;">

  </div>



  <!--<div id="jump">JUMP TO A TOPIC:</div>



  <div id="toc" style="padding-left:10px;">

                </div>-->

</div>

<!-- END PRESENTATION -->