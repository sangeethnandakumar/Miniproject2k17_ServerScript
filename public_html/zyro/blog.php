<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Blog</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="Blog" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.41" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1489301577" rel="stylesheet" type="text/css" />
	<link href="css/blog.css?ts=1489301577" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance56" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Products/" target="_self" title="Products">Products</a></li><li><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul></div><div id="wb_element_instance57" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Software</h4></div><div id="wb_element_instance58" class="wb_element"><img alt="logo" src="gallery_gen/4ef815bff3228807fbb87f7fc5d30562_50x60.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance60" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(blog);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance60");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance60").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 132px;">
	
<div id="wb_element_instance59" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://amazinginside.esy.es">amazinginside.esy.es</a></p></div><div id="wb_element_instance61" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(52);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
