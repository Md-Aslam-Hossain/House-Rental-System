<?php
	error_reporting(0); 
	require_once("_includes/connection.php");
	require_once("_includes/functions.php");
	{
	$msg=$_GET['msg'];
}
?>
<html> 
<head>
	<title> House Rental System</title>
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
<!--/*colors used:
#b07df4
#FFB51A
#d0affd */-->
   
   
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=239326496139606";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="body">
<?php include("_includes/header.html"); ?>
<div id="indexmaincontent">
<div id="topheading">
<p>Find Ad of your choice</p>
</div>
<span style="color:#ffb51a; line-height:20px; font-size:14px; font-family:'Comic Sans MS', cursive; text-align:center;" ><?php echo $msg; ?> </span>





	
        	
<div id="category">

<?php echo navigation_index_1($sel_subject, $sel_page); ?>
	
</div>

<div id="category">
<?php echo navigation_index_2($sel_subject, $sel_page); ?>
	
</div>
<div id="category">
<?php echo navigation_index_3($sel_subject, $sel_page); ?>
	
</div>
	
	</div>
<div id="freead">
<a href="category.php">Post a Free Ad</a>
</div>
<div id="fb" >
<div id="topheading">
<p>Stay Connected</p>
</div>
<div id="fbfloat">
<div style="margin:10px;" class="fb-like" data-href="https://www.facebook.com/dustu.raju.58" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>
<div class="g-plusone" data-size="tall"></div>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div>
</div>

<div id="advertisment">
<div id="topheading">
<p>Advertisments</p>
</div>
<div id="adimage">
<!-- Start of adf.ly banner code --><a href="http://adf.ly/?" target="_blank"><img border="0" src="https://cdn.adf.ly/images/banners/adfly.300x250.1.gif" width="198" height="180" title="AdF.ly - shorten links and earn money!" /></a>
<!-- End of adf.ly banner code -->
</div>
</div>
	
</div>

<?php include("_includes/ender.php"); ?>

</body>

</html>