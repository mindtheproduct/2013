<!-- BigVideo Dependencies -->
<script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
<script type="text/javascript" src="assets/js/jquery-ui-1.8.22.custom.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>

<script src="http://vjs.zencdn.net/c/video.js"></script>

<script type="text/javascript" src="assets/js/bigvideo.js"></script>

<script>
    $(function() {
        var BV = new $.BigVideo();
        BV.init();
        BV.show('http://cdn.mindtheproduct.com/mtp-ambience.mp4',{ambient:true},{doLoop:true});
    });
</script>
