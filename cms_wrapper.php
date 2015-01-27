<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<body>
<head>
    <meta charset="utf-8" />
    
    <title>VerticalType CMS New</title>
    
    <link href="/cms-vt/css/styles.css" rel="stylesheet" type="text/css" />				
    <link href="/css/select2.css" rel="stylesheet"  type="text/css">
    <link href="/vendors/bootstrap3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
 
    <!--[if lt IE 9]><script type="text/javascript" src="cms-vt/js/html5.js"></script><![endif]-->
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <script src="/vendors/dropzone/js/dropzone.js"></script>

</head>


<header>	
    <div class="container-flexible">
        <div class="logo">
            <a href="">
                <img src="/images/cms-vt/logo-light-small.png" alt="">
                <span>version 1.0</span>
            </a>
        </div>	
    </div>
</header>

<div class="container-flexible">
    <div class="container-wrapper">
      <div class="content-area">
        <!-- top bar -->	

        <div class="top-bar">
            <div class="curent-site">
                Website: <span><a href="/home/">[% site.name || 'Legislative Handshake' %]</a></span>
            </div>
            <div class="top-bar__select-site">
                [% select.render %]
            </div>
        </div>

        <!-- / top bar-->	
        <div class="content">
            [% content %]
        </div>
      </div>
    
    <div class="left-bar">
        <!-- Left navigation -->

        <div class="navigation">
            <menu class="vertical-menu">					
                <li>
                    <a href="" class='drop'><i class="icon-home icon-black"></i><i class="icon-home icon-white"></i> Dashboard</a>
                </li>				
                <li>
                    <a href="" class='drop'><i class="icon-tags icon-black"></i><i class="icon-tags icon-white"></i>  Sections</a>
                    <ul>
                        [% FOREACH section IN sections %]
                            <li><a href="/[% section.controller %]/admin/">[% section.label %]</a></li>
                        [% END %]


                    </ul>
                </li>
                <li>
                    <a href="" class='drop'><i class="icon-file icon-black"></i><i class="icon-file icon-white"></i>  Pages</a>

                    <ul>
                        <li><a href="/home/">Home Page</a></li>
                        <li><a href="[% c.uri_for('browse') %]">[% title %] Public View</a></li>

                    </ul>
                </li>
                <li class="selected">
                    <a href="" class='drop'><i class="icon-file icon-black"></i><i class="icon-file icon-white"></i>  Related Tables</a>

                    <ul>
                    [% FOREACH table IN related %]
                        <li><a href="/[% table.uri %]/admin/">[% table.label %]</a></li>
                    [% END %]



                    </ul>
                </li>
                <li>
                    <a href="" class='drop'><i class="icon-th-list icon-black"></i><i class="icon-th-list icon-white"></i>  Menu </a>
                    <ul>
                        <li><a href="/section/admin/">Edit Sections</a></li>
                        <li><a href="/grid/create/">Add Grid Option</a></li>
                        <li><a href="/section/create/">Add Section</a></li>

                    </ul>
                </li>
            </menu>
        </div>
     
        <!-- / Left navigation -->

        [% search.render %]

    </div>


    </div>
</div>


<!-- Javascript
================================================== -->
    <script src="/js/jquery-1.7.2.min.js"></script>
    <script src="/js/bootstrap.js"></script> 
    <script src="/js/main_script.js"></script>
    <script src="/js/select2.min.js"></script>
    <script src="//devel.verticaltype.com/vendors/ckeditor/config.js"></script>
    <script src="//devel.verticaltype.com/vendors/ckeditor/ckeditor.js"></script>

    <!-- http://www.jacklmoore.com/colorbox/ -->
    <script src="/vendors/colorbox/jquery.colorbox-min.js"></script>


    <script src="/sites/mga/js/main.js" type="text/javascript"></script>

  <script type="text/javascript">
        jQuery(document).ready(function(){
            
            $('.dropDown').toggle(function(){
                $(this).next('ul').slideDown('fast');
                $(this).addClass('active');
                return false;
            }, function (){
                $(this).next('ul').slideUp('fast');
                $(this).removeClass('active');
                return false;
            });
            
        });

    $(document).ready(function() {
        $("#sections").select2({
            placeholder: "Select a Section"
        });
    });

    $(document).ready(function() {
        $("#headlines").select2({
            placeholder: "Select an Article"
        });
    });

    $(document).ready(function() {
        $("#regions").select2({
            placeholder: "Select a Region"
        });
    });

    $(document).ready(function() {
        $("#team_members_0_member_id").select2({
            placeholder: "Select B Player"
        });
    });

    $(document).ready(function() {
        $("#team_members_1_member_id").select2({
            placeholder: "Select C Player"
        });
    });

    $(document).ready(function() {
        $("#team_members_2_member_id").select2({
            placeholder: "Select D Player"
        });
    });





    $(document).ready(function() {
        $("#subjects").select2({
            placeholder: "Select a Subject"
        });
    });

    $(document).ready(function() {
        $("#roles").select2({
            placeholder: "Select a Role"
        });
    });

    $(document).ready(function() {
        $("#players").select2({
            placeholder: "Select a Player"
        });
    });

    $(document).ready(function() {
        $("#member_id").select2({
            placeholder: "Select a Player"
        });
    });

    $(document).ready(function() {
        $("#country_id").select2({
            placeholder: "Select a Country"
        });
    });

    $(document).ready(function() {
        $("#handicap").select2({
            placeholder: "Select a Handicap"
        });
    });

    $(document).ready(function() {
        $("#organizations").select2({
            placeholder: "Select an Organization"
        });
    });

    $(document).ready(function() {
        $("#people").select2({
            placeholder: "Select a Member"
        });
    });

    $(document).ready(function() {
        $("#rules").select2({
            placeholder: "Select a Rule"
        });
    });

    $(document).ready(function() {
        $("#captains").select2({
            placeholder: "Select a Team Captain"
        });
    });

    $(document).ready(function() {
        $("#captain_id").select2({
            placeholder: "Select a Team Captain"
        });
    });

    $(document).ready(function() {
        $("#members").select2({
            placeholder: "Select a Member"
        });
    });

    $(document).ready(function() {
        $("#events").select2({
            placeholder: "Select an Event"
        });
    });

    $(document).ready(function() {
        $("#contents").select2({
            placeholder: "Select an Event"
        });
    });



    $(document).ready(function() {
        $("#images").select2({
            placeholder: "Select an Image"
        });
    });

</script>

</body>
</html>

