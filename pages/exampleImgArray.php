<!-- Content -->
<h1>Images Array</h1>
<?php
    if(empty($_GET['content'])) {
        include 'grids/controls/img-array.php'; 
    } else  {
        include 'grids/controls/' . htmlspecialchars($_GET["content"]) . '.php';
    };
?>

