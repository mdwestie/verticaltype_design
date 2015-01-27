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
            echo '
                    <li class="active"><a href="" class="drop active">Custom Pages</a>
                        <ul class="active"> ';

            foreach($scan_list as $file)
                if(is_file($dir.'/'.$file))
                    $file_list[] = $file;

            foreach($file_list as $file)
                echo '<li><a href="?content='.$file.'">'.$file.'</a><li />';

            echo '</ul></li>';
            ?>

      <menu>
        <li><a href="http://design.verticaltype.com/our-projects/VRScars/index.html">Vrs Cars</a></li>
        <li><a href="http://design.verticaltype.com/our-projects/Crty/index.html">Crty</a></li>
      </menu>
</div>
