<div class="container indent">
        <div class="clearfix"><a href=""class="logo pull-right"></a></div>

        <div><h5>Example bootstrap menu</h5></div>
        
        <!-- bootstrap menu -->
        <div class="submenu">
			<?php include 'grids/navigation/bootstrap.php'; ?>
        </div>
        
        <div class="row verticaltype">
        <!-- Left sidebar -->
            <div class="span4">
                <?php include 'grids/navigation/left_nav.php'; ?>
            </div>
            
        <!-- Content -->
            <div class="span8">
                <?php
                    if(empty($_GET['pages'])) {
                        include 'grids/controls/search.php'; 
                    } else  {
                        include 'grids/controls/' . htmlspecialchars($_GET["content"]) . '.php';
                    };
                ?>
            </div>
        </div>			
</div>


