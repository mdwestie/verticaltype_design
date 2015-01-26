<?php
    if(empty($_GET['content'])) {
        $content = 'grids/pages/article.php'; 
    } else  {
        $_content = $_GET['content'];
        $content = 'grids/pages/' . htmlspecialchars($_GET["content"]) . '.php';
    };

    if(empty($_GET['layout'])) {
        $grids = 'grids/pages/home-page.php';
    } else  {
        $_layout = $_GET['layout'];
        $grids = 'grids/layout/' . htmlspecialchars($_GET["layout"]) . '.php'; 
    };

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>VerticalType</title>
    <meta name="description" content="" />
    <meta name="author" content="" />
	
	<link href="http://devel.verticaltype.com/css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="http://devel.verticaltype.com/css/style.css" rel="stylesheet" type="text/css"  />
	
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  </head>

  <body>
	
	<div id="main">

            <?php include 'grids/header/verticaltype.php'; ?>
	
            <?php include $grids; ?>

	</div>

	<!-- Footer -->

	<?php include 'grids/footer/verticaltype.php'; ?>

  <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://devel.verticaltype.com/js/jquery.js"></script>
    <script src="http://devel.verticaltype.com/bootstrap/js/bootstrap.js"></script>
	<script src="http://devel.verticaltype.com/js/jquery.cycle.all.js"></script>
	<script src="http://devel.verticaltype.com/js/jquery.lightbox-0.5.js"></script>
	<script type="text/javascript">
			
			<!--  initialize the slideshow when the DOM is ready -->
			$('.slideshow').cycle({
				fx: 'fade', 
				speed:  'slow',
				timeout: 4000, 
				next:   '.slideshow', 
				pager: '#nav',
				pagerAnchorBuilder: function(idx, slide) { 
				return '<a href="#"></a>'; 
				} 
			});
			
			$('#gallery').cycle({
				fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
				speed:  'slow',
				timeout: 4000, 
				timeout: 0, 
				next:   '#next, .gallery', 
				prev:   '#prev',
				pagerAnchorBuilder: function(idx, slide) { 
				return '<a href="#"></a>'; 
				} 
			});
			
			$('#gallery a').lightBox({
				overlayBgColor: '#212a31',
				overlayOpacity: 0.8,
				imageBtnNext: 'images/ico/lightbox-btn-next.png',
				imageBtnPrev: 'images/ico/lightbox-btn-prev.png',
				imageBtnClose: 'images/ico/lightbox-btn-close.png',
				imageLoading: 'images/ico/lightbox-ico-loading.gif'
			});
			
			$('.dropdown-toggle').dropdown();
	</script>
  </body>
</html>
