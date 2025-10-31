<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: https://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar-wrap grid-container fluid">

	<div class="top-bar" id="top-bar-menu">
	
		<div class="top-bar-left float-left">
			
			<div class="site-branding show-for-sr">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$trailhead_description = get_bloginfo( 'description', 'display' );
				if ( $trailhead_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $trailhead_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->
		
			<ul class="menu">
				<li class="logo"><a href="<?php echo home_url(); ?>">
					<svg width="80" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect width="100" height="100" rx="14" ry="14" fill="#0b1220"/><g style="isolation:isolate" fill="#fff"><path d="M14.71 20.55h8.72l9.21 22.48h.39l9.21-22.48h8.72V54H44.1V32.23h-.28l-8.66 21.61h-4.67l-8.66-21.69h-.28v21.86h-6.86V20.55ZM56.79 54V20.55h7.07v13.8h14.36v-13.8h7.06V54h-7.06V40.18H63.86V54z"/></g><g style="isolation:isolate" fill="#fff"><path d="M31.21 80h-6.7V61.09h6.76c1.9 0 3.54.38 4.91 1.13s2.43 1.84 3.17 3.25 1.11 3.1 1.11 5.06-.37 3.66-1.11 5.08a7.66 7.66 0 0 1-3.19 3.26q-2.07 1.14-4.95 1.14Zm-2.71-3.43h2.54c1.18 0 2.18-.21 2.99-.63s1.42-1.08 1.83-1.97.61-2.04.61-3.45-.2-2.54-.61-3.43-1.02-1.54-1.82-1.96c-.81-.42-1.8-.63-2.98-.63h-2.55v12.06ZM43.41 80V61.09h12.74v3.3h-8.74v4.51h8.09v3.3h-8.09v4.52h8.78v3.3H43.41ZM62.75 61.09l4.57 14.37h.18l4.58-14.37h4.43L69.99 80h-5.15l-6.53-18.91z"/></g></svg>
				</a></li>
			</ul>
						
		</div>
		<div class="menu-toggle-wrap top-bar-right float-right grid-x grid-padding-x">
			<div class="cell auto">
				<button type="button" data-open="contact-form-modal">
					<svg width="40" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 544 512"><title>Contact</title><path d="m201.9 344-75 168.6L493.2 344zm291.3-48L126.9 127.4l75 168.6zM66.8 529.6 160 320 66.8 110.4C65 106.2 64 101.6 64 97c0-18.2 14.7-33 32.8-33 4.7 0 9.4 1 13.7 3l475.7 219c13.3 6.1 21.8 19.4 21.8 34s-8.5 27.9-21.8 34L110.5 573c-4.3 2-9 3-13.7 3-18.1 0-32.8-14.8-32.8-33 0-4.6 1-9.2 2.8-13.4" fill="#fff"/></svg>
				</button>
			</div>
			<div>
				<div class="reveal" id="contact-form-modal" data-reveal>
					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true"><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><title>Close</title><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-89-345c-9.4 9.4-9.4 24.6 0 33.9l55 55-55 55c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l55-55 55 55c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-55-55 55-55c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-55 55-55-55c-9.4-9.4-24.6-9.4-33.9 0"/></svg></span>
					</button>
					<?=do_shortcode('[wpforms id="32" title="false"]');?>
				</div>
			</div>
			<div class="cell shrink">
				<ul class="menu">
					<li><a id="menu-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
				</ul>
			</div>
		</div>
	</div>
	
</div>