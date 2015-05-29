<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo( 'name' ); wp_title( '|', true, 'left' ); ?></title>

    <link rel="stylesheet" href="<?php echo( esc_url( get_template_directory_uri() ) . "/bootstrap.min.css" ); ?>" />
    <link rel="stylesheet" href="<?php echo( esc_url( get_stylesheet_uri() ) ); ?>" />
    
    <?php wp_head(); ?>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <h1><?php bloginfo( 'name' ); ?></h1>
    <h2><?php bloginfo( 'description' ); ?></h2>
    
    <?php
    if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
    ?>
    
    <h3><?php the_title(); ?></h3>
    
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <?php edit_post_link(); ?>
    
    <?php
		endwhile;
		
		if ( get_next_posts_link() ) {
			next_posts_link();
		}
		
		if ( get_previous_posts_link() ) {
			previous_posts_link();
		}
		
	?>
	
	<?php else: ?>
	<p>No posts found!</p>				
	<?php endif; ?>
    
    <?php wp_footer(); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!--<script src="js/bootstrap.min.js"></script>-->
  </body>
</html>