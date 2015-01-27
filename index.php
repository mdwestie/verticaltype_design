<?php
    if(empty($_GET['content'])) {
        $content = 'pages/article.php'; 
    } else  {
        $_content = $_GET['content'];
        $content = 'pages/' . htmlspecialchars($_GET["content"]);
    };

    if(empty($_GET['layout'])) {
        $grids = 'layouts/fluid-2.php'; 
    } else  {
        $_layout = $_GET['layout'];
        $grids = 'layouts/' . htmlspecialchars($_GET["layout"]) . '.php'; 
    };

    if(empty($_GET['site'])) {
        $site = 'default';
    } else  {
        $site =  htmlspecialchars($_GET["site"]); 
    };

    $head = 'sites/' . $site . '/templates/' . 'head.php'; 
    $header = 'sites/' . $site . '/templates/' . 'header.php'; 
    $footer = 'sites/' . $site . '/templates/' . 'footer.php'; 
    $navigation = 'navigation/left_nav.php'; 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">


  <?php include $head; ?>

  <body>
	
	<div id="main">

        <?php include $header; ?>
	
        <?php include $grids; ?>

	</div>

	<!-- Footer -->

     <?php include $footer; ?>


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
