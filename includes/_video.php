<!-- BigVideo Dependencies -->
<script>window.jQuery || document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"><\/script>')</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.22/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>

<script src="http://vjs.zencdn.net/c/video.js"></script>

<script type="text/javascript" src="assets/js/bigvideo.js"></script>

<script>
    $(function() {
        var BV = new $.BigVideo({useFlashForFirefox:false});
        BV.init();
        BV.show('http://cdn.mindtheproduct.com/mtp-ambience.mp4',{ambient:true, doLoop:true, altSource:'http://cdn.mindtheproduct.com/mtp-ambience.ogv'});
    });
</script>
