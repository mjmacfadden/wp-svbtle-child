<?php 

get_header();

?>

<div class="entry-meta">
	
</div><!-- .entry-meta -->

<header id="begin">
	<time datetime="<?php echo date('Y-m-d'); ?>" id="top_time"><?php echo date('F d, Y'); ?></time>

	<div id="search">
		<?php 
			if ( dynamic_sidebar('header_widget') ) : 
			else : 
		?>
		<?php endif; ?>
	</div>
	
</header>

<?php include("navigation.php"); ?>

<?php

get_template_part( 'loop', 'index' );

get_footer(); 

?>
