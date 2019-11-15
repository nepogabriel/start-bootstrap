<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <?php wp_head(); ?>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">

        <?php //VERIFICANDO SE EXISTE LOGO
          if(has_custom_logo()) {
            the_custom_logo();
          }
        ?>
        
        <!--  TÍTULO(logo) ORIGINAL
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        -->

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

        <!-- MENU ORIGINAL
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Sample Post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
        -->

        <!-- MENU DINÂMICO -->
        <?php
        if(has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary', //nome do menu
                'fallback_cb' => false, //se ñ tiver menu ñ irá mostrar nada
                'container_class' => 'collapse navbar-collapse', //classes do container
                'container_id' => 'navbarResponsive', //id do menu
                'menu_class' => 'navbar-nav ml-auto' //classes do ul
            ));
        }
        ?>
      </div>
    </nav>