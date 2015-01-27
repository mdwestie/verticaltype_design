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


  </body>
</html>
