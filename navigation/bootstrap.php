<?php
    if(empty($_GET['layout'])) {
        $_layout = 'fixed'; 
    } else  {
        $_layout = htmlspecialchars($_GET["layout"]);
    };
?>



<div class="navbar">
    <div class="navbar-inner">
      <div class="container">
        <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a href="#" class="brand">Submenu name</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown border-right">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Content Layouts <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?layout=<?php echo $_layout ?>&content=pagination">Pagination</a></li>
                <li><a href="?layout=<?php echo $_layout ?>&content=search">Search Results</a></li>
                <li><a href="?layout=<?php echo $_layout ?>&content=article">Article</a></li>
                <li><a href="?layout=<?php echo $_layout ?>&content=form">Content Form</a></li>
                <li class="divider"></li>
                <li class="nav-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form action="" class="navbar-search pull-left">
            <input type="text" placeholder="Search" class="search-query span2">
          </form>
          <ul class="nav pull-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown last">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->

