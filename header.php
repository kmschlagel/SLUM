<!doctype html>
<html>
  
<head>
    <meta charset="utf-8"/>
    <title>Silver Lake United Methodist Church</title>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" media="all" href="css/silver.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->
      
    <script type="text/javascript" src="scripts/simple-jquery-slideshow/simple-jquery-slideshow/jquery-1.2.6.min.js"></script>
    <script type="text/javascript" src="scripts/menueffect/script.js"></script>
    <script type="text/javascript" src="scripts/jquery-1.10.2.min.js"></script>
  
  
<script type="text/javascript">
  
  
  
/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/
  
function slideSwitch() {
    var $active = $('#slideshow .active');
  
    if ( $active.length == 0 ) $active = $('#slideshow div:last');
  
    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow div:first');
  
    // uncomment the 3 lines below to pull the images in random order
      
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );
  
  
    $active.addClass('last-active');
  
    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}
  
$(function() {
    setInterval( "slideSwitch()", 5000 );
});
  
  
</script>
  
</head>
      
<body lang="en" class="clearfix" onLoad="menuSlider.init('menu','slide')">
          
<div id="header">
         
    <div id="logo">
       <a href="index.php"><img src="images/slu_logo.gif" width="300" height="60"></a>
    </div> <!--/logo-->
             
    <div id="slideshow">
       <div class="active"><img src="images/slideshow/cross2.jpg" alt="Silver Lake United Methodist Church" /></div>
        <div><img src="images/slideshow/sanctuary.jpg" alt="Silver Lake sanctuary"></div>
          <div><img src="images/slideshow/side_angle.jpg" alt="Silver Lake church"></div>
         <div> <img src="images/slideshow/lake2.jpg" alt="lake"></div>
         <div><img src="images/slideshow/kids.jpg" alt="kids by Silver Lake sign"></div>
         <div> <img src="images/slideshow/cross.jpg" alt="Silver Lake cross"></div>
          <div><img src="images/slideshow/softball.jpg" alt="Silver Lake softball team"></div>
       
    </div> <!-- /slideshow -->
       
   <div class="menu">
        <ul class="clearfix" id="menu">
            <li><a href="about.php">About Silver Lake</a></li>
            <li><a href="helping_others.php">Helping Others</a></li>
            <li><a href="getting_connected.php">Getting Connected</a></li>
            <li><a href="learning_opportunities.php">Learning Opportunities</a></li>
        </ul>
        <div id="slide"><!-- --></div>
    </div> <!-- /menu-->
         
</div> <!--end of header-->   
