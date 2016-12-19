<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<title>photography Dariusz Buczynski </title> 
	<meta name="description" content="Photoshoots, weddings, occasional Dariusz Buczynski" /> 
	<meta name="keywords" content="photography portfolio wedding fashion photos photography" /> 
	<link rel="shortcut icon" href="images/favicon.png" /> 
	<link rel="shortcut icon" href="images/favicon.ico" />         
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/global.css" />	
	<link rel="stylesheet" href="css/style.css" />
    <link rel="image_src" href="/fbImg.jpg"/>
    <meta property="og:image" content="http://photo.dbstyles.net/fbImg.jpg"/>
<!--         <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css' />   -->
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>         
        <script language="javascript" type="text/javascript" src="swfobject.js" ></script>    
        <script language="javascript" type="text/javascript" src="js/jquery-1.8.2.min.js" ></script>    
        <script src="js/jquery-1.2.2.pack.js" type="text/javascript"></script>    
        <script type="text/javascript">
                $(function() {
                        $("#navIndeed a span").css("opacity","0");
                        $("#navIndeed a span").hover(function () {
                                $(this).stop().animate({
                                        opacity: 1
                                }, 'slow');
                        },
                        function () {
                                $(this).stop().animate({
                                        opacity: 0
                                }, 'slow');
                        });
                });
        </script>
   
</head>

<body class="bods home">
    <div id="wrapperBig">
        <div id="wrapperSmall">        
            <div id="mainNav">
                    <a href="http://photo.dbstyles.net/"><img id="logo" src="images/logoP.png" alt="" /></a>
                    <img id="logoDesc" src="images/film.png" alt="" />
                    <p class="menuTx">since 2009 </p>
                  <div id="navIndeed">
                            <a href="http://photo.dbstyles.net" title="Home" class="home">Home<span></span></a>                       
                            <a href="/kasiamarcin" title="Example wedding photos" class="wedd">Wedding<span></span></a>
                            <a href="mailto:&#100;&#98;&#64;&#100;&#98;&#115;&#116;&#121;&#108;&#101;&#115;&#46;&#110;&#101;&#116;" title="Don't hasitate" class="last">Contact<span></span></a>	  
                    </div>
<!--                     <div id="navBottom">
                            <a href="index.html">Przygotowania</a>
                            <a href="#">Ceremonia</a>
                            <a href="form.html" class="last">Sesja</a>  
                    </div>  -->              
                   
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
            
<?php require("foot.php");?>

        </div>
     </div>
</body>
</html>
