<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>IR Blogs</title>

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  </head>

  <body>

    <!--menu header -->
    <nav id="header" class="navbar navbar-default navbar-fixed-top">
      <div id="header-container" class="container navbar-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php bloginfo('template_url'); ?>/img/ir.png" id="brand">
        </div>

        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php
              wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => 'collapse navbar-collapse',
               'container_id'      => 'bs-example-navbar-collapse-1',
               'menu_class'        => 'nav navbar-nav',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
              );
             ?>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--end menu header -->
