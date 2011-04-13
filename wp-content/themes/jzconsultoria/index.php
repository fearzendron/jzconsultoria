<?php 
if ( is_home() ) :
  get_header('home');
elseif ( is_404() ) :
  get_header('404');
else :
  get_header();
endif; 
?>

	INDEX

<?php get_footer(); ?>
