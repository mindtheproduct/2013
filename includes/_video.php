<!-- BigVideo Dependencies -->
<script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
<script type="text/javascript" src="assets/js/jquery-ui-1.8.22.custom.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.imagesloaded.min.js"></script>

<script src="http://vjs.zencdn.net/c/video.js"></script>

<script type="text/javascript" src="assets/js/bigvideo.js"></script>

<script src="assets/js/modernizr.custom.46399.js"></script>

<script>
    $(function() {
        var BV = new $.BigVideo({useFlashForFirefox:false});
        BV.init();
        if (Modernizr.touch) {
    		BV.show('sunrise.jpg');
		} else {
        BV.show('mtp-ambience.mp4',{altSource:'mtp-ambience.ogv'},{ambient:true},{doLoop:true});
    	}
    });
</script>
