<?php

error_reporting (E_ALL ^ E_NOTICE); 
$page=$_GET['page'];
if($page==""){$page="home";}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php echo $page; ?> - DevotedToBeauty.com </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>


	<div class="tail-top">
		<div class="tail-bottom">
			<div id="main">
<!-- header -->
				<div id="header">
					<div class="row-1">
						<ul class="top-nav">
							<li><a href="?page=home"><img alt="" src="images/icon-home.gif" /></a></li>
							<li><a href="?page=contact"><img alt="" src="images/icon-mail.gif" /></a></li>
							<li><a href="#"><img alt="" src="images/icon-map.gif" /></a></li>
						</ul>
						<!-- <form action="" id="search-form"><fieldset>website search &nbsp; <input type="text" value="" class="text" /></fieldset></form> -->
					</div>
					<div class="row-2" align="center">
						<div>
							<img alt="" src="images/devotionStudio.png" />
						</div>
					</div>
					<div class="row-3">
						<ul class="site-nav">
							<li><a <?php if($page!="home"){echo "href='?page=home'";} ?>>Home</a></li>
							<li><a <?php if($page!="wedding"){echo "href='?page=wedding'";} ?>>Weddings</a></li>
							<li><a <?php if($page!="gallery"){echo "href='?page=gallery'";} ?>>Gallery</a></li>
							<li><a <?php if($page!="contact"){echo "href='?page=contact'";} ?>>Contact Us</a></li>
						</ul>
					</div>
				</div>
<!-- content -->

<?php



include ($page.".php");






?>
	<iframe src="http://www.facebook.com/plugins/like.php?href=www.devotedtobeauty.com&amp;layout=standard&amp;show_faces=false&amp;width=750&amp;action=like&amp;font=arial&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="false"></iframe>

<!--				
				-->	
<!-- footer -->
				<div id="footer">
					<div class="indent">
						<div class="fleft"><font color="666666" size="1pt">Designed by: &nbsp;Rcane Design</font></div>
						<div class="fright">Copyright - DevotedToBeauty.com 2011 </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
