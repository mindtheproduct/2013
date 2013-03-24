<?php 
  include 'includes/Mobile_Detect.php';
  $detect = new Mobile_Detect();
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="twitter:card"           content="summary">
  <meta name="twitter:url"            content="http://conference.mindtheproduct.com/">
  <meta name="twitter:title"          content="Mind The Product 2013 :: Fri 27 Sept 2013 in London">
  <meta name="twitter:description"    content="Mind the Product 2013 brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love.">
  <meta name="twitter:image"            content="">


  <meta property="fb:app_id"          content="240866859264841" /> 
  <meta property="og:url"             content="http://conference.mindtheproduct.com/" /> 
  <meta property="og:title"           content="Mind The Product 2013 :: Fri 27 Sept 2013 in London" /> 
  <meta property="og:image"           content="" /> 
  <meta property="og:description"     content="Mind the Product 2013 brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love." /> 
  <!-- Grid styles for IE -->
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
  
  <link rel="stylesheet" href="assets/css/normalize.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/1140.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <?php if($page == "home") { ?>
    <?php if ($detect->isMobile() && $detect->isTablet()) { ?>

    <?php } else { ?>
      <link rel="stylesheet" href="assets/css/bigvideo.css" type="text/css" media="screen" />
      <?php include 'includes/_video.php'; ?>
    <?php } ?>
  <?php } ?>
   
  <?php if($page == "location") { ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="assets/js/richmarker-compiled.js"></script>
    <script src="assets/js/map.js"></script>
  <?php } ?>

  <script>
    jQuery(document).ready(function($){
      $('.menu-link').click(function(){
        $('nav').toggleClass('open');
        return false;
      });
    });
  </script>

  <!-- Pulled from http://code.google.com/p/html5shiv/ -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link href="/favicon.ico" rel="shortcut icon" />
  <link href="/apple-touch-icon.png" rel="apple-touch-icon">
	  
  <title>Mind The Product Conference :: 29 September 2013 in London - <?php echo $title ?></title>

  <script>

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-21862375-4']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
  
</head>

<body class="<?php echo $page; ?>">
<?php if($page == "schedule") { ?> 
  <div class="background background-schedule"></div>
<?php } ?> 

<?php if($page == "about") { ?> 
  <div class="background background-about"></div>
<?php } ?> 

<?php if($page == "home") { ?> 
  <div class="wrapper">
<?php } ?> 



  <header>
  	<?php include 'includes/_nav.php'; ?>
  </header>