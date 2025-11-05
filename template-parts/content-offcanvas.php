<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>

	<div class="inner">
	
		<?php trailhead_off_canvas_nav(); ?>
		
		<?=do_shortcode('[wpforms id="32" title="false"]');?>
	
	</div>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>
		

	<?php endif; ?>

</div>
