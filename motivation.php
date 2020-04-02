<!--
TFF
url:
http://totalfitnessforce.com/index.php/_CONT_TFF/cont_1/cont_first.php

MOTIVATION
url:
http://totalfitnessforce.com/index.php/_CONT_TFF_MOTIVATION/cont_1/cont_first.php


?php
	header ("Location:index.php?link='_CONT_TFF/cont_1/cont_first.php#nave'");
	?>
	-->

<?
$url='http://totalfitnessforce.com/index.php/_CONT_TFF/cont_1/cont_first.php';
$url_mot='http://totalfitnessforce.com/index.php/_CONT_TFF_MOTIVATION/cont_1/cont_first.php';
$p_general=1;
$p_tff_22e=0;
$p_tff_55e=0;
$p_tff_66e=0;
$p_tff_77e=0;
$p_tff_88e=0;

$menu_tff='class="active"';
$menu_tff_men='';
$menu_tff_women='';
$menu_tff_motivation='';
$menu_tec='';
$menu_wtf='';
$menu_curio='';
$menu_store='';
$menu_health='';
$menu_knowing='';


include("ini.php");

$dir_publi='_PUBLI_TFF';
//$dir_cont='_CONT_TFF_MOTIVATION/'.$N_cont.'';
$dir_cont='_CONT_TFF_MOTIVATION/'.cont_5.'';


/*if($_GET['link'] && $_GET['link_cont'])*/
if($_GET['link'])
{
 $cont_first=$_GET['link'];
 /*$dir_cont=$_GET['link_cont'];*/
 $article1='';
 $article2='';
	 if($_GET['link_a']){
	 $article1=$_GET['link_a'];
	 $article2=$_GET['link_b'];
	}
}else{
$cont_first='_CONT_TFF_MOTIVATION/'.$N_cont.'/cont_first.php';
$article1='';
 $article2='';
}


?>


		<!DOCTYPE html>
		
	
	
		<html dir="ltr" lang="en-US">
		<head><!-- Created by Artisteer v4.0.0.58475 -->
			<meta charset="utf-8">
			<title>\o/ TOTAL FITNESS FORCE </title>
			<meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->	
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ stile from submit mailChimp $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->	

		<!-- Begin MailChimp Signup Form -->
<!--
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->	
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
			
			<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
			<link rel="stylesheet" href="style.css" media="screen">
			<!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
			<link rel="stylesheet" href="style.responsive.css" media="all">


			<script src="jquery.js"></script>
			<script src="script.js"></script>
			<script src="script.responsive.js"></script>
			
		
			<!-- <script src="scriptmenu.js"></script> -->
		<!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	
		<script>


              window.location.href="index.php?link=? echo '_CONT_TFF/cont_1/cont_first.php#nave';?>"  ? echo $menu_tff ?>; 	
		</script>
		-->
	


			
		<style>.art-content .art-postcontent-0 .layout-item-0 {padding-top: 0px; padding-bottom: 0px;}
		.art-content .art-postcontent-0 .layout-item-1 {  border-collapse: separate;  }
		.art-content .art-postcontent-0 .layout-item-2 { border-right-style:solid;border-right-width:1px;border-right-color:#87D237; padding-right: 10px;padding-left: 10px;  }
		.art-content .art-postcontent-0 .layout-item-3 { border-right-style:solid;border-right-width:1px;border-right-color:#87D237; padding: 0px;  }
		.art-content .art-postcontent-0 .layout-item-4 { padding-top: 0px;padding-right: 10px;padding-bottom: 0px;padding-left: 10px; border-radius: 20px;  }
		.art-content .art-postcontent-0 .layout-item-5 { padding-right: 20px;padding-left: 20px;  }
		.art-content .art-postcontent-0 .layout-item-6 { padding-left: 20px; padding-bottom: 0px; padding-top: 0px;}
		.art-content .art-postcontent-0 .layout-item-7 { padding-left: 100px; padding-bottom: 0px; padding-top: 0px;}
		.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
		.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

		</style>
		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  SHARETHIS BUTTONS   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!--
		<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "ebc83022-586d-43b0-96b6-a2cb45e2b26c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
		-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$  SHARETHIS BUTTONS   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!--
		<script>


              window.location.href="index.php?link=? echo '_CONT_TFF/cont_1/cont_first.php#nave';?>  ? echo $menu_tff ?>"; 
	
		</script>
		-->
		</head>
		<body>
		
		<!--
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		-->
	<!--<script language="JavaScript">-->
		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$   submit bootom addthis  $$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

		<!-- Go to www.addthis.com/dashboard to customize your tools -->
	
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-545c54f2282b20f8" async="async"></script>
		
		


		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$   submit bootom addthis  $$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		
		<div id="art-main">
		
		<header class="art-header clearfix">
		<div class="art-slider art-slidecontainerheader">
			<div class="art-slider-inner">
		<div class="art-slide-item art-slideheader0">
		<div class="art-textblock art-slideheader0-object469975324" data-left="11.51%">
				<div class="art-slideheader0-object469975324-text"><p style="color: rgb(233, 247, 218); font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="font-size: 48px; color: rgb(107, 170, 39); font-family: 'Comic Sans MS';">Total Fitness Force</span></p><p style="color: #E9F7DA; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">More Than Just Diets &amp; Workout&nbsp;</span><br style=""></p><p style="color: #E9F7DA; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Fitness, Fun, Technology &nbsp;&amp; Enterteinment</span></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader1">
		<div class="art-textblock art-slideheader1-object878613102" data-left="15.59%">
				<div class="art-slideheader1-object878613102-text"><p style="color: rgb(233, 247, 218); font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="color: rgb(145, 234, 77); "><span class="Apple-style-span" style="font-size: 48px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: #B1ED68; ">Health </span><span class="Apple-style-span" style="font-family: Verdana; color: #B1ED68; ">&amp;</span><span class="Apple-style-span" style="font-size: 48px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; color: #B1ED68; "> Care</span></span></p><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">Workouts, Nutrition and Healthy diets</span><br></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader2">
		<div class="art-textblock art-slideheader2-object1426310705" data-left="11.64%">
				<div class="art-slideheader2-object1426310705-text"><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="font-size: 48px; color: #46BBC8; ">Last Technology</span></p><p style="text-align: left; "><span class="Apple-style-span" style="color: rgb(72, 91, 73); font-size: 20px; line-height: 22px;">Gatgets, News &amp; Curiosities&nbsp;</span></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader3">
		<div class="art-textblock art-slideheader3-object732716003" data-left="16.67%">
				<div class="art-slideheader3-object732716003-text"><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="font-size: 48px; color: #67836A; ">Knowing each other</span></p><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">About Girls &amp; Boys&nbsp;</span><br></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader4">
		<div class="art-textblock art-slideheader4-object431232624" data-left="11.38%">
				<div class="art-slideheader4-object431232624-text"><p style="color: rgb(233, 247, 218); font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="color: rgb(250, 171, 0); "><span class="Apple-style-span" style="font-size: 48px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; ">Fun </span><span class="Apple-style-span" style="font-family: Verdana; ">&amp;</span><span class="Apple-style-span" style="font-size: 48px; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; "> Curiosities</span></span></p><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">Relax and Smile&nbsp;</span><br></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader5">
		<div class="art-textblock art-slideheader5-object1533572043" data-left="13.13%">
				<div class="art-slideheader5-object1533572043-text"><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="font-size: 48px; color: #DD3A08; ">WTF &nbsp;:D #$%#</span></p><p style="color: #E9F7DA; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">Relax and Smile&nbsp;</span><br style=""></p></div>
			
		</div>
		</div>
		<div class="art-slide-item art-slideheader6">
		<div class="art-textblock art-slideheader6-object1746780728" data-left="15.84%">
				<div class="art-slideheader6-object1746780728-text"><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-decoration: none; text-align: left; "><span style="font-size: 48px; color: #A8CD13; ">Going Shopping!</span></p><p style="color: rgb(233, 247, 218); font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif; font-weight: bold; font-style: italic; text-align: left; "><span class="Apple-style-span" style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; line-height: 22px; font-style: normal; font-weight: normal; font-size: 20px; color: #485B49; ">Going shopping!!!</span><br></p></div>
			
		</div>
		</div>

			</div>
		</div>
		<div class="art-slidenavigator art-slidenavigatorheader">
		<a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a><a href="#" class="art-slidenavigatoritem"></a>
		</div>



			<div class="art-shapes">


					</div>

						
							
		</header>
		<!--$$$ div temporal  $$$$-->
		<!--</div>-->
		
		<!--?php
			$active=
			include "_A_PUBLISH/publi22-center.php";
		?>-->
		<div id="nave">
		<?
			include "menu.php";
		?>

		</div>		
						
		
		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$ DESTINATION AREA - SECTION $$$$$$  -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$         PUBLI-0   %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI1-1 PUBLI2-2  PUBLI3-3  %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI4-4 PUBLI5-5  POPULAR-6  %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   TEXT-7   PUBLI6-8  INDEX-9  %%%%%%%%%%%%%%%%%% -->  
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   TEXT-7   PUBLI6-8  PUBLI7-10  %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   TEXT-7   PUBLI6-8  PUBLI7-10  %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   block-11  block-12   block-13   %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$      block-14     block-15   %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$           block-16      %%%%%%%%%%%%%%%%%% -->
		<!-- tipe blog -->
		<!-- SECTIONS = ###0-->
		<!-- SECTIONS = ###1-->
		<!--    0  -->
		<!-- 1  2  3 -->
		<!-- 4  5  6 -->

		<!-- 7  8  9 -->
		<!-- 7  8  10 -->

		<!-- 11 12 13-->
		<!--  14 15 -->
		<!--   16    -->


		<!-- $$$$$$$$$$$$$$$$$$$$$$$$ DESTINATION AREA - SECTION $$$$$$  -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$         PUBLI-0   %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI1-1 PUBLI2-2  PUBLI3-3  %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI4-4 PUBLI5-5  POPULAR-6  %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   INDEX-7   TEXT-9  PUBLI7-10  %%%%%%%%%%%%%%%%%% -->  
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI6-8  TEXT-9  PUBLI7-10  %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   PUBLI6-8  TEXT-9  PUBLI7-10  %%%%%%%%%%%%%%%%%% -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$   block-11  block-12   block-13   %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$      block-14     block-15   %%%%%%%%%%%%%%%%%% -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$           block-16      %%%%%%%%%%%%%%%%%% -->
		<!-- tipe blog -->
		<!-- SECTIONS = ###0-->
		<!-- SECTIONS = ###1-->
		<!--    0  -->
		<!-- 1  2  3 -->
		<!-- 4  5  6 -->

		<!-- 7  9  10 -->
		<!-- 8  9  10 -->

		<!-- 11 12 13-->
		<!--  14 15 -->
		<!--   16    -->


			
			
			
			
		<div class="art-sheet clearfix">
						<div class="art-layout-wrapper clearfix">
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<div class="art-layout-cell art-content clearfix">
								<article class="art-post art-article">
								<div class="art-postcontent art-postcontent-0 clearfix">
		<div class="art-content-layout-wrapper layout-item-0">
			<div class="art-content-layout layout-item-0">
			<div class="art-content-layout-row">
		<!--###0-->
		<!--PUBLI-0-->						
				<div class="art-layout-cell layout-item-0" style="width: 100%" >
					<p style="text-align: center;"><span style="color: rgb(54, 69, 55); font-family: 'Comic Sans MS'; font-size: 26px; text-align: center;">Everything you do, do it with pasion&nbsp;</span><br></p>
				</div>  
		<!--PUBLI-0-->		
		<!--###0-->		
		</div>
		</div>
		</div>




		<!--$$$$$$$$$$$$$$$$$$$$$$$$$$ FIST  BLOCK  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   -->
		<div class="art-content-layout-wrapper layout-item-0">
			<div class="art-content-layout layout-item-1">
				<div class="art-content-layout-row">


		<!--$$$$$$$$$$$$$$$$$$$$$$$$$$ LEFT FIRST BLOCK  PUBLI1 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   -->
		<!--###1 -->
		<!--PUBLI1-1-->

			<div class="art-layout-cell layout-item-0" style="width: 17%" >
					<p></p>
					
			</div>

		<!--PUBLI1-1-->
		<!--###1 -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->



		<!--$$$$$$$$$$$$$$$$$$$$$$$$$$ CENTRAL FIRST BLOCK  PUBLI2 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   -->
		<!--###2 -->
		<!--PUBLI2-2-->
		
		
			<?php
			/*include   "_PUBLI_TFF/publi22-center.php";*/
			include   (''.$dir_publi.'/publi22-center.php');
			?>
		
		
		
		<!--PUBLI2-2-->
		<!--###2 -->

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

		<!--$$$$$$$$$$$$$$$$$$$$$$$$$$ RIGHT FIRST CLOCK  PUBLI3 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   -->
		<!--###3 -->
		<!--PUBLI3-3-->

		<div class="art-layout-cell layout-item-6" style="width: 17%" >
				<p></p>
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->				
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ VERTICAL FOLLOW $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->				
		
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_vertical_follow_toolbox"></div>
	
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->				
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ VERTICAL FOLLOW $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->					
		
		</div>

		<!--PUBLI3-3-->
		<!--###3 -->


		
		<p style="text-align: center;"> </p>
		</div>
		</div>
		</div>                                
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$ END FIRST BLOCK   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

		<div class="art-content-layout-wrapper layout-item-0">
		<div class="art-content-layout layout-item-1">

		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$  FIRST BLOCK BODY  PUBLI  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

			<div class="art-content-layout-row">
						
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$  FIRST BLOCK BODY  PUBLI4 LEFT   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->		
			<!--###4 -->
			<!--PUBLI4-4-->
			<div class="art-layout-cell layout-item-0" style="width: 17%" >
				<p style="text-align: center;">
				
				</p>
			</div>
			<!--PUBLI4-4-->
			<!--###4 -->
			
			
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$  FIRST BLOCK BODY  PUBLI5 CENTER  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			<!--###5 -->
			<!--PUBLI5-5-->
			
			<?php
			/*			include "_A_PUBLISH/publi55-body.php";*/
			include   (''.$dir_publi.'/publi55-body.php');
			?>
			
			<!--PUBLI5-5-->
			<!--###5 -->
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			
			
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$  FIRST BLOCK BODY  POPULAR RIGHT $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			<!--###6 -->
			<!--POPULAR-6-->
			<div class="art-layout-cell layout-item-4" style="width: 15%" >
				<p  style="text-align: center;"> </p>	
				<p><span style="color: rgb(107, 170, 39); font-family: 'Comic Sans MS'; font-size: 16px;">Interesting</span></p>
				
				<ul>
				<!--<li><a href="#" style="font-size: 14px;">article 1</a><span style="line-height: normal;"><br></span></li>-->
				<!--<li><a href="#" style="font-size: 14px;">article 2</a><br></li>-->
				</ul>
				
			</div>
			<!--POPULAR-6-->
			<!--###6 -->
			<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		</div>
		</div>
		</div>


		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$    BODY SECTION   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			

		<div class="art-content-layout-wrapper layout-item-0">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
			
		<!-- $$$$$$$$$$$$$$$$$    BODY SECTION  LEFT INDEX    PUBLI 6 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!-- $$$$$$$$$$$$$$$$$    BODY SECTION  LEFT  INDEX   $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!--###7-->
		<!--INDEX-7-->

			<div class="art-layout-cell layout-item-2" style="width: 16%" >
				<p>         </p>
				<p>         </p>
				<p>         </p>
				
				<p><span style="color: rgb(107, 170, 39); font-family: 'Comic Sans MS'; font-size: 20px;">       </span></p>
				<p><span style="font-family: Verdana; font-size: 14px; color: #4A4F4A;">                         </span></p>
				<p><span style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 14px;"><br>            </span></p>
				<ul>            
				<!--<li><a href="store.php?link=? echo '_CONT_STORE/_store_fitness.php';?>&linkss=? echo '_CONT_STORE/_store_fitness2.php';?> ">Fitness Nutrition</a></li>-->
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_training.php#nave';?>" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Training</a></li>
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_nutrition.php#nave';?>" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Nutrition</a></li>
					<li><a href="store.php?link=<? echo '_CONT_STORE/_store_gatgets.php#nave';?>" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Gatgets</a></li>
					<!--<li><a href="store.php?link=_CONT_STORE/_store_curiosities.php#nave" ? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Curiosities</a></li>-->
					<li><a href="store.php?link=_CONT_STORE/_store_office.php#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Office</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_cars.php#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Cars</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_girls.php#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Girls</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_boys.php#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Boys</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_childrens.php#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Childrens</a></li>
					<li><a href="store.php?link=_CONT_STORE/_store_pets.php#nave#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Pets</a></li>
					<!--<li><a href="store.php?link=_CONT_STORE/_store_gifts.php#nave" ? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Gifts</a></li>-->
					<li><a href="store.php?link=_CONT_STORE/_store_books.php#nave#nave" <? echo $menu_store ?> style="color: rgb(107, 170, 39); font-family: Verdana; font-size: 16px;">Best Sellers</a></li>
					
				</ul>
				<p><span style="line-height: 16px;"><br></span></p>
				<p><span style="line-height: 16px;"><br></span></p>
				<p><span style="line-height: 16px;"><br></span></p>
				<p><span style="line-height: 16px;"><br></span></p>
				<p><span style="line-height: 16px;"><br></span></p>
		<!--INDEX-7-->		
		<!--###7-->
				
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->		

		<!-- $$$$$$$$$$$$$$$$$    BODY SECTION  LEFT INDEX PUBLI  6  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->		
		<!--###8-->
		<!--PUBLI6-8-->
				
				<p style="text-align: center;"><br></p>
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->				
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$     PUBLI 66     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
				
			<?php
			/*include "_A_PUBLISH/publi66-body.php";*/
			include   (''.$dir_publi.'/publi66-body.php');
			?>
											
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->				
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$   PUBLI 66       $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->		
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->	
				<p><br></p>
				<p><br></p>
				<p><br></p>
				<p><br></p>

				
			</div>
		<!--PUBLI6-8-->       		
		<!--###8-->
		<!-- $$$$$$$$$$$$$$$$$   END   BODY SECTION LEFT INDEX PUBLI 6  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
			
			
		<!-- $$$$$$$$$$$$$$$$$$$     BODY SECTION  CENTER  TEXT     $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!--###9-->
		<!--TEXT-9-->
		<div class="art-layout-cell layout-item-2" style="width: 69%" >
			
			<!-- ESTABLECER SECCIONES DE PARRAFOS X PUBLICACION 
				SECCIONES ESTATICAS Q SE REMPLAZAN O NUEVAS SECCIONES INCREMENTALES Y SE ELIMINA LAS ULTIMAS  O ESTRACTO DE LAS ULTIMAS -->	
				
			<!-- $$$$$$$$$$$$$$$$$    BODY SECTION CENTER PUBLISHING 1    $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->	
			<!--###9-1-->
			<!--TEXT-9-1-->
			
			<?php
			
			
			include $article1;
			include $article2;
			include $cont_first;
			?>
			
			<!--###9-1-->
			<!--TEXT-9-1-->
			
			<!-- $$$$$$$$$$$$$$$$$    BODY SECTION CENTER PUBLISHING 1    $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
			
			
		</div>	

		
		

		<p> <br> </p>
		

		<!-- $$$$$$$$$$$$$$$$$    BODY SECTION  RIGHT PUBLI 7  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!--###10-->
		<!--PUBLI7-10-->
			<div class="art-layout-cell layout-item-3" style="width: 15%" >
			
			<?php
			/*include "_A_PUBLISH/publi77-body.php";*/
			include   (''.$dir_publi.'/publi77-body.php');
			?>
				
			</div>
		<!--PUBLI7-10-->
		<!--###10-->


		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->	
			
			</div>
		</div>
		</div>
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$ END BODY SECTION $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->



		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$    LAST BODY SECTION 1 content DE 5  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!-- $$$$$$$$$$$$$$$$$    LINK CONT 	      		  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->

	<div class="art-content-layout">
	<div class="art-content-layout-row">
		
	<div class="art-layout-cell layout-item-5" style="width: 15%" >
        <p><br></p>
    </div>

			<?php
				include (''.$dir_publi.'/publi88-last1.php');
			?>	

	<div class="art-layout-cell layout-item-5" style="width: 15%" >
        
		
	</div>
			
	</div>
	</div>
<!--	
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
-->
	<div class="art-content-layout">
	<div class="art-content-layout-row">
		
	<div class="art-layout-cell layout-item-5" style="width: 15%" >
        <p><br></p>
    </div>

			<?php
				include (''.$dir_publi.'/publi88-last1-2.php');
			?>	

	<div class="art-layout-cell layout-item-5" style="width: 15%" >
        
		
	</div>
			
	</div>
	</div>
<!--		
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
-->
		
<div class="art-content-layout">
    <div class="art-content-layout-row">
	
	<?php
		include (''.$dir_cont.'/links_last.php');
	?>
	
    </div>
</div>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->



<!-- $$$$$$$$$$$$$$$$$    LAST BODY publi  SECTION 2 DE  5 LINKS  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

<div class="art-content-layout">
    <div class="art-content-layout-row">
	
	<?php
		include (''.$dir_publi.'/publi88-last5.php');
	?>

    </div>
</div>
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->




		<!-- $$$$$$$$$$$$$$$$$    LAST BODY SECTION  DE 1 BLOCK 16 $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
		<div class="art-content-layout-wrapper layout-item-0">
		<div class="art-content-layout">
			<div class="art-content-layout-row">
			<!--###16-->
			<!--BLOCK16-16-->
			<div class="art-layout-cell layout-item-5" style="width: 100%" >
			
			
				<p><br></p>
				
				
			</div>
			<!--BLOCK16-16-->
			<!--###16-->
			 </div>
		</div>
		</div>
		<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->



		</div>
		</article>
		</div>
		</div>
		</div>
		</div>
		




		<footer class="art-footer clearfix">
		<p>Total Fitness Force<br>
		<br></p>
		</footer>
		
		</div>
		<!--
			<p class="art-page-footer">
				<span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
			</p>
		-->
		</div>






		</body></html>