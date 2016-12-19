<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="content-Type" content="text/html; charset=utf-8"/> 
	<title>Katarzyna and Marcin wedding</title> 
	<meta name="description" content="Zdjęcia ślubne Katarzyny i Marcina 21.09.2012" /> 
	<meta name="keywords" content="sesja,ślubna" /> 
	<link rel="shortcut icon" href="../images/favicon.png" /> 
	<link rel="shortcut icon" href="../images/favicon.ico" />         
	<link rel="stylesheet" href="../css/reset.css" />
	<link rel="stylesheet" href="../css/global.css" />	
	<link rel="stylesheet" href="../css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />           
        <script language="javascript" type="text/javascript" src="swfobject.js" ></script>    
   
</head>

<body class="bods">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '368465543228707', // App ID
      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
-->
    <div id="wrapperBig">
        <div id="wrapperSmall">        
            <div id="mainNav">
                    <a href="http://photo.dbstyles.net/"><img id="logo" src="../images/logo.png" alt="" /></a>
                    <img id="logoDesc" src="../images/film.png" alt="" />
                    <p class="menuTx">Stay tuned for updates. </p>
                    <!--<div id="navIndeed" class="lower">
                            <a href="index.html" class="navLink">Wedding</a>
                            <a href="#" class="navLink">Beuty</a>
                            <a href="form.html" class="navLink">Commercial</a>
                            <a href="#" class="navLink">O mnie</a>
                            <a href="form.html" class="navLink">Kontakt</a>	  
                    </div>
                    -->
            </div>

            <div id="playerPart">
                

<!-- Div that contains gallery. -->
<div id="gallery">
<h1>No flash player!</h1>
<p>It looks like you don't have flash player installed. <a href="http://www.macromedia.com/go/getflashplayer" >Click here</a> to go to Macromedia download page.</p>
</div>

<!-- Script that embeds gallery. -->
<script language="javascript" type="text/javascript">
var so = new SWFObject("flashgallery.swf", "gallery", "1150", "817", "8"); // Location of SWF file. You can change gallery width and height here (using pixels or percents).
so.addParam("quality", "high");
so.addParam("allowFullScreen", "true");
so.addParam("wmode", "transparent");
so.addVariable("content_path","img"); // Location of a folder with JPG and PNG files (relative to php script).
so.addVariable("color_path","default.xml"); // Location of XML file with settings.
so.addVariable("script_path","flashgallery.php"); // Location of PHP script.
//so.addVariable("api_key","xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"); // Flickr API key.
so.write("gallery");
</script>

<br/>          
      
            </div>
            

<div class="fb-comments" data-href="http://dbfoto.pl/kasiamarcin/" data-num-posts="40" data-width="800"></div>
             
            
<?php require("foot.php");?>

        </div>
     </div>
</body>
</html>
