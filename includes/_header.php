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
  <meta name="twitter:description"    content="Mind the Product 2013 is a conference that brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love.">
  <meta name="twitter:image"          content="assets/images/bg/speaking.jpg">


  <meta property="fb:app_id"          content="240866859264841" /> 
  <meta property="og:url"             content="http://conference.mindtheproduct.com/" /> 
  <meta property="og:title"           content="Mind The Product 2013 :: Fri 27 Sept 2013 in London" /> 
  <meta property="og:image"           content="assets/images/bg/speaking.jpg" /> 
  <meta property="og:description"     content="Mind the Product 2013 is a conference that brings together product leaders from around the world to explore the intersection of design, technology and business in order to inspire you to build products your customers love." /> 
  <!-- Grid styles for IE -->
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
  
  <link rel="stylesheet" href="http://cdn.mindtheproduct.com/conference/2013/assets/css/normalize.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="http://cdn.mindtheproduct.com/conference/2013/assets/css/1140.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
  <?php if($page == "home") { ?>
    <?php if (!$detect->isMobile()) { ?>
      
      <link rel="stylesheet" href="http://cdn.mindtheproduct.com/conference/2013/assets/css/bigvideo.css" type="text/css" media="screen" />
      <script>
        $(function () {
            setTimeout( 
                function () {
                    $('.fading').animate({ opacity: 1 }, 500);    
                }, 500
            );
        });
      </script>
      <?php include 'includes/_video.php'; ?>
    <?php } ?>
  <?php if ($detect->isTablet()) { ?>
      <style type="text/css">
        body.home h1{
          max-width: 80%;
        }
      </style>
  <?php } ?>


  <?php } ?>
   
  <?php if($page == "location") { ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="http://cdn.mindtheproduct.com/conference/2013/assets/js/richmarker-compiled.js"></script>
    <script src="http://cdn.mindtheproduct.com/conference/2013/assets/js/map.js"></script>
  <?php } ?>


  <script>
    jQuery(document).ready(function($){
      $('.menu-link').click(function(){
        $('nav').toggleClass('open');
        return false;
      });
    });
  </script>

  <script src="assets/js/app.js"></script>

  <!--[if lt IE 9]>
    <script src="assets/js/html5.js"></script>
  <![endif]-->

  <link href="http://conference.mindtheproduct.com/2013/favicon.ico" rel="shortcut icon" />
  <link href="http://conference.mindtheproduct.com/2013/apple-touch-icon.png" rel="apple-touch-icon">
	  
  <title>Mind The Product Conference :: 27 September 2013 in London :: <?php echo $title ?></title>
  
</head>

<body class="<?php echo $page; ?>">
<?php if($page == "schedule") { ?> 
  <div class="background background-schedule"></div>
<?php } ?> 

<?php if($page == "about") { ?> 
  <div class="background background-about"></div>
<?php } ?> 

<?php if($page == "home") { ?> 
  <div class="wrapper fading">
<?php } ?> 



  <header>
  	<?php include 'includes/_nav.php'; ?>
  </header>