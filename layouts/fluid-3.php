<div class="container indent">
    <div class="clearfix"><a href="" class="logo pull-right"></a></div>

    <div><h5>Example bootstrap menu</h5></div>

    <!-- bootstrap menu -->
    <div class="submenu">
       <?php include 'grids/navigation/bootstrap.php'; ?>
    </div>

    <div class="row-fluid verticaltype">
        <div class="span3">
       <?php include 'grids/navigation/left_nav.php'; ?>
        </div>

        <div class="span8">
            <div class="hero-unit well">

            <?php include $content; ?>

            </div>
        </div>

        <div class="span3">
       <?php include 'grids/navigation/right_nav.php'; ?>
        </div>
    </div>
</div>



