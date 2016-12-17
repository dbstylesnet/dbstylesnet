<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
	<title>photo.dbstyles.net wedding</title> 
	<meta name="description" content="Wedding photos Kate and Marcin 21.09.2012" /> 
	<meta name="keywords" content="sesja,ślubna" /> 
	<link rel="shortcut icon" href="../../images/favicon.png" /> 
	<link rel="shortcut icon" href="../../images/favicon.ico" />         
	<link rel="stylesheet" href="../../css/reset.css" />
	<link rel="stylesheet" href="../../css/global.css" />	
	<link rel="stylesheet" href="../../css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>           
        <script language="javascript" type="text/javascript" src="swfobject.js" ></script>   
        <script language="javascript" type="text/javascript" src="../../js/jquery-1.8.2.min.js" ></script>    
        <script src="../../js/jquery-1.2.2.pack.js" type="text/javascript"></script>    
        <script src="../../js/stuff.js" type="text/javascript"></script>            
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif] --> 
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

<body class="bods ceremonia on">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

    <div id="wrapperBig">
        <div id="wrapperSmall">        
            <div id="mainNav">
                    <a href="http://photo.dbstyles.net"><img id="logo" src="../../images/logoP.png" alt="" /></a>
                    <img id="logoDesc" src="../../images/film.png" alt="" />
<?php require("../../menu.php");?>
                    <div id="navBottom">
                            <a class="sesja" href="../">Photoshoot</a>
                            <a class="ceremonia" href="#">Ceremony</a>
                    </div>                            
            </div>
            <div id="main-content"><div id="inside">
                <div id="playerPart">
                    <div id="gallery">
                    <h1>No flash player!</h1>
                    <p>It looks like you don't have flash player installed. <a href="http://www.macromedia.com/go/getflashplayer" >Click here</a> to go to Macromedia download page.</p>
                    </div>
                        <script language="javascript" type="text/javascript">
                        var so = new SWFObject("flashgallery.swf", "gallery", "1150", "817", "8"); 
                        so.addParam("quality", "high");
                        so.addParam("allowFullScreen", "true");
                        so.addParam("wmode", "transparent");
                        so.addVariable("content_path","img"); 
                        so.addVariable("color_path","default.xml"); 
                        so.addVariable("script_path","flashgallery.php"); 
                        so.write("gallery");
                        </script>
                    <br/>          
                </div>
            </div></div>
            
            <div class="fb-comments" data-href="http://dbfoto.pl/kasiamarcin/" data-num-posts="40" data-width="800"></div>


<?php require("../../foot.php");?>

        </div>
     </div> 
</body>
</html>
