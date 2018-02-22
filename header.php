<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<meta name="description" content="<?php bloginfo('description'); ?>">
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<?php wp_head(); ?>
</head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
          <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo home_url (); ?>">
               <div class=custom-logo>
                 <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' )[0];
                    echo "<img src='$logo'>";
                  ?>
               </div>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarr" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <?php wp_nav_menu(array(
              'theme_location' => 'top-menu',
              'menu_class' => 'navbar-nav ml-auto',
              'container_id' => 'navbarr',
              'container' => 'div',
              'container_class' => 'collapse navbar-collapse'
            )); ?>
          </div>
        </nav>
     </header>
