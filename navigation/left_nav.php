<div class="well">
      <h5>Page Layouts</h5>
      <menu>
		<li><a href="?content=<?php echo $_content ?>&layout=fixed">Fixed two column</a></li>
		<li><a href="?content=<?php echo $_content ?>&layout=fixed-3">Fixed three column</a></li>

        <li><a href="?content=<?php echo $_content ?>&layout=fluid-2">Fluid Two columns</a></li>
        <li><a href="?content=<?php echo $_content ?>&layout=fluid-3">Fluid Three columns</a></li>
      </menu>
</div>
<div class="well">
      <h5>Pages</h5>

<?php
    $dir = 'pages/';

    $file_list = array();
    $scan_list = scandir($dir);
    echo '<a href="" class="drop active">Custom Pages</a><ul class="active"> ';

    foreach($scan_list as $file) {
        if(is_file($dir.'/'.$file)) echo '<li><a href="?content='.$file.'">'.$file.'</a></li>';
    }

    '</ul>';
?>


</div>
