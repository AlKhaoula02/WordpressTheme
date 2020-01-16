<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-xl">
  <a class="navbar-brand " href="#"><img class="logo" src="http://localhost/WordpressTheme/wp-content/themes/Mon theme/assets/img/css117.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   

    <div class="collapse navbar-collapse" id="navbarsExample07XL">
    
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarsExample07XL',
            'menu_class'        => 'nav navbar-nav ml-auto navbar-right',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    
      <!-- <form class="form-inline my-2 my-md-0" method="get">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form> -->
    </div>
  </div>
</nav>



</header>

		
	</div> 	<!-- container -->
        


  

        
    
