<?php 
	require_once("_includes/connection.php");

?>
<html> 
<head>
	<title> Post and Sale </title>
    
    <link href="_css/category.css" rel="stylesheet" type="text/css">
	<link href="_css/homepage.css" rel="stylesheet" type="text/css"/>
	<link href="_css/header.css" rel="stylesheet" type="text/css">
	<link  href="_css/foot.css" rel="stylesheet" type="text/css">
    
    <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
 <!--   <script type="text/javascript">
	$("").ready(function(e) {
     
    });
	
	</script>
    <script type="text/javascript">
	$("document").ready(function(e) {
       $("#jfors").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jfors").animate({ width: "320px" }, 500);
				$(".allforsubnav").css("display","block");
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jfors").animate({ width: "280px" }, 500);
				setTimeout(function(){ $(".allforsubnav").css("display","none"); },2000)
            });
            });
			
		/*$(".allforsubnav").hover(function(){
			$(this).toggleClass(function(index, class) {
                $(".allforsubnav").css("display","block");
            });
		},
		function(){
			$(this).toggleClass(function(index, class) {
             setTimeout(function(){ $(".allforsubnav").css("display","none"); },2000)   
            });
			
		});*/
			
			
		$("#jcomunity").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jcomunity").animate({ width: "320px" }, 500);
				$(".allcomsubnav").css("display","block");
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jcomunity").animate({ width: "280px" }, 500);
				 setTimeout(function(){ $(".allcomsubnav").css("display","none"); },2000)
            });
            });
		
		
			
			$("#jvehicle").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jvehicle").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jvehicle").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jclasses").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jclasses").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jclasses").animate({ width: "280px" }, 500);
            });
            });
		$("#jservices").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jservices").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jservices").animate({ width: "280px" }, 500);
            });
            });
			
		$("#jjobs").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jjobs").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jjobs").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jmatrimonial").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jmatrimonial").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jmatrimonial").animate({ width: "280px" }, 500);
            });
            });
		
		$("#jrealestate").hover(
            function() {
                $(this).toggleClass( function(){
                $("#jrealestate").animate({ width: "320px" }, 500);
            });
            },
             function() {
                $(this).toggleClass( function(){
                 $("#jrealestate").animate({ width: "280px" }, 500);
            });
            });
		
	});
	
	</script>-->
<!--/*colors used:
#b07df4
#d0affd */-->
   
   
</head>

<body>

<div id="body">
<?php include("_includes/header.html"); ?>
<div id="maincontent">
<div class="ab-cs">
 <ul >
 <h3><span> 1</span>Select a category:</h3>
 <li id="jfors">For Sale <img src="_images/catimg.png"/>
  
         
 <ul > 

<li><a href="#">Rooms for Rent - Shared</a></li>

<li><a href="#">Vacation Rentals</a></li>
<li><a href="#">Parking Spots</a></li>
<li><a href="#">Land</a></li>
<li><a href="#">Office - Commercial Space</a></li>
<li><a href="#">Shops for Rent - Sale</a></li>
 
 
 </ul>
 </div>
 </div>
</div>
<div id="foot">
<?php include("_includes/ender.php"); ?>

</div>
</body>

</html>