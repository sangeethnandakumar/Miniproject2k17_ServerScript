<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Contacts</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.41" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1489301577" rel="stylesheet" type="text/css" />
	<link href="css/3.css?ts=1489301577" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance39" class="wb_element"><ul class="hmenu"><li><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="Products/" target="_self" title="Products">Products</a></li><li class="active"><a href="Contacts/" target="_self" title="Contacts">Contacts</a></li></ul></div><div id="wb_element_instance40" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">Software</h4></div><div id="wb_element_instance41" class="wb_element"><img alt="logo" src="gallery_gen/4ef815bff3228807fbb87f7fc5d30562_50x60.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance43" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1">Contacts</h1></div><div id="wb_element_instance44" class="wb_element"><form class="wb_form" method="post"><input type="hidden" name="wb_form_id" value="fc582a14"><textarea name="message" rows="3" cols="20" class="hpc"></textarea><table><tr><th>Name&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_0" value="Name"><input class="form-control form-field" type="text" value="" name="wb_input_0"></td></tr><tr><th>E-mail&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_1" value="E-mail"><input class="form-control form-field" type="text" value="" name="wb_input_1"></td></tr><tr class="area-row"><th>Message&nbsp;&nbsp;</th><td><input type="hidden" name="wb_input_2" value="Message"><textarea class="form-control form-field form-area-field" rows="3" cols="20" name="wb_input_2"></textarea></td></tr><tr class="form-footer"><td colspan="2"><button type="submit" class="btn btn-default">Submit</button></td></tr></table></form><script type="text/javascript">
			<?php global $wb_form_id; if (isset($wb_form_id) & $wb_form_id == "fc582a14") { ?>
				var formValues = <?php echo json_encode($_POST); ?>;
				var formErrors = <?php global $formErrors; echo json_encode($formErrors); ?>;
				wb_form_validateForm("fc582a14", formValues, formErrors);
				<?php global $wb_form_send_state; if (isset($wb_form_send_state) && $wb_form_send_state) { ?>
					setTimeout(function() {
						alert("<?php echo addcslashes($wb_form_send_state, "\\'\"&\n\r\0\t<>"); ?>");
					}, 1);
					<?php $wb_form_send_state = null; ?>
				<?php } ?>
			<?php } ?>
			</script></div><div id="wb_element_instance45" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">+91 9495661468</p>

<p class="wb-stl-normal">Sangeeth Nandakumar</p>

<p class="wb-stl-normal">Edathala, North PO, Aluva</p>

<p class="wb-stl-normal">Ernakulam, Kerala, India</p>

<p class="wb-stl-normal">PIN : 683561</p>

<p class="wb-stl-normal">mail : sangeethnandakumar@gmail.com</p>
</div><div id="wb_element_instance46" class="wb_element" style=" line-height: normal;"><p class="wb-stl-normal">This text should be replaced with information about you and your business This text should be replaced with information about you and your business This text should be replaced with information about you and your...</p></div><div id="wb_element_instance47" class="wb_element"></div><div id="wb_element_instance48" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(3);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance48");
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
					$("#wb_element_instance48").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 132px;">
	
<div id="wb_element_instance42" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer">© 2017 <a href="http://amazinginside.esy.es">amazinginside.esy.es</a></p></div><div id="wb_element_instance49" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(70);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
