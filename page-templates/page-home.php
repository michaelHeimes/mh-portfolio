<?php
/**
 * Template name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

get_header();
$fields = get_fields();

// Services
$service_right_column = $fields['service_right_column'] ?? null;
$featured_service = $fields['featured_service'] ?? null;

$featured_services_args = [
	'post_type' => 'service',
	'posts_per_page' => -1,
	'meta_query' => [
		[
			'key' => 'featured_service',
			'value' => '1',
			'compare' => '='
		]
	]
];
$featured_services = new WP_Query($featured_services_args);

$services_args = [
	'post_type' => 'service',
	'posts_per_page' => -1,
	'meta_query' => [
		[
			'key' => 'featured_service',
			'value' => '1',
			'compare' => '!='
		]
	]
];
$services = new WP_Query($services_args);

$projects_args = [
	'post_type' => 'project',
	'posts_per_page' => -1,
];
$projects = new WP_Query($projects_args);

?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header home-banner">
						<div class="grid-container">
							<div class="inner">
								<div class="grid-x grid-padding-x align-middle">
									<div class="cell small-12 tablet-3">
										<div class="img-wrap position-relative">
											<img src="<?=get_template_directory_uri();?>/assets/images/banner-img-2.jpg">
											<div class="mask"></div>
										</div>
									</div>
									<div class="cell small-12 tablet-9">
										<h1>Web / WordPress Development<br> <span class="h3 text-right">by Michael Heimes</span></h1>
									</div>
								</div>
							</div>
						</div>
					</header><!-- .entry-header -->
				
					<section class="entry-content intro-menu" itemprop="text">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 tablet-7">
									<div class="hello">
										<h2>Hello!</h2>
										<div class="p-2">
											<p>My name is Michael Heimes. I’m a Freelance Senior Front-end Developer based in West Reading, PA (USA).</p>
											<p>For over a decade I’ve been helping clients with bespoke solutions tailored to their unique needs.</p>
											<p>I specialize in building custom WordPress themes building pixel-perfect reproductions of the UI design with the functionality the client requires. I work in both project-based and retainer / fractional roles as the sole developer resource, part of a team of developers, and taking on overflow for clients with in-house developers.</p>
										</div>
									</div>
									<div class="pride-points position-relative">
										<div class="bg bg-white"></div>
										<p><strong>I pride myself in:</strong></p>
										<ul>
											<li>
												<a href="#">
													my technical proficiency
													<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><title>More Info</title><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-40-176c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v-88c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64zm40-144c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32"/></svg>
												</a>
											</li>
											<li>my varied and diverse experience in and out of the industry</li>
											<li>building intuitive, empathetic CMS admins that make content management effortless</li>
											<li>my attention to detail both in replicating designs and strategic execution</li>
											<li>my “design eye” and ability to design &amp; build based on existing themes and branding</li>
											<li>being reliable by meeting deadlines and expectations</li>
											<li>my ability to communicate with both the technical and non-technical</li>
											<li>working quickly and autonomously</li>
											<li>providing maximum value to my clients</li>
										</ul>
										<p>
											<a href="#">
											more about me...
												<svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><title>More Info</title><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-40-176c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v-88c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64zm40-144c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32" fill="#B33E00"/></svg>
											</a>
										</p>
									</div>
								</div>
								<div class="cell small-12 tablet-5 p-2">
									<div class="menu-wrap bg-green position-relative">
										<div class="morse morse-top">
											
											<div class="word grid-x" aria-label="You">
												<span class="show-for-sr">
													You
												</span>
												<div class="letter grid-x" aria-label="Y">
													<span class="dash"></span>
													<span class="dot"></span>
													<span class="dash"></span>
													<span class="dash"></span>
												</div>
												<div class="letter grid-x" aria-label="o">
													<span class="dash"></span>
													<span class="dash"></span>
													<span class="dash"></span>
												</div>
												<div class="letter grid-x" aria-label="u">
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dash"></span>
												</div>
											</div>
											
											<div class="word vertical grid-x flex-dir-column" aria-label="should">
												<span class="show-for-sr">
													Should
												</span>
												<div class="letter vertical grid-x flex-dir-column" aria-label="s">
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="h">
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="o">
													<span class="dash"></span>
													<span class="dash"></span>
													<span class="dash"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="u">
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dash"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="l">
													<span class="dot"></span>
													<span class="dash"></span>
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="d">
													<span class="dash"></span>
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
											</div>
											<div class="word grid-x" aria-label="hire">
												<span class="show-for-sr">
													hire
												</span>
												<div class="letter grid-x" aria-label="h">
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
												<div class="letter grid-x" aria-label="i">
													<span class="dot"></span>
													<span class="dot"></span>
												</div>
												<div class="letter grid-x" aria-label="r">
													<span class="dot"></span>
													<span class="dash"></span>
													<span class="dot"></span>
												</div>
												<div class="letter grid-x" aria-label="e">
													<span class="dot"></span>
												</div>
											</div>
											<div class="word vertical grid-x flex-dir-column" aria-label="me!">
												<span class="show-for-sr">
													me!
												</span>
												<div class="letter vertical grid-x flex-dir-column" aria-label="m">
													<span class="dash"></span>
													<span class="dash"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="e">
													<span class="dot"></span>
												</div>
												<div class="letter vertical grid-x flex-dir-column" aria-label="!">
													<span class="dash"></span>
													<span class="dot"></span>
													<span class="dash"></span>
													<span class="dot"></span>
													<span class="dash"></span>
													<span class="dash"></span>
												</div>
											</div>
										</div>
										<h2>Service Menu</h2>
										<ul>
											<li>
												<a href="#custom-wordpress-themes">Custom WordPress Themes</a>
											</li>
											<li>
												<a href="#modifying-existing-websites">Modifying Existing websites</a>
											</li>
											<li>
												<a href="#wordpress-maintenance">WordPress Maintenance</a>
											</li>
											<li>
												<a href="#web-performance-optimization">Performance Optimization</a>
											</li>
											<li>
												<a href="#accessibility-compliance">Accessibility Compliance</a>
											</li>
											<li>
												<a href="#bug-squashing">Bug squashing</a>
											</li>
											<li>
												<a href="#static-websites-emails">Custom static HTML Websites and Emails</a>
											</li>
											<li>
												<a href="#web-design">Small-to-medium scale Web Design</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<?php get_template_part('template-parts/sections/section', 'tech-stack-logos');?>
					
					<section class="quick-stats bg-light-gray entry-content text-center" itemprop="text">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h2>Quick Stats</h2>
								</div>
							</div>
							<div class="grid-x grid-padding-x align-center small-up-2 medium-up-3 large-up-4">
								<div class="cell stat-card">
									<div class=" bg-white h-100 grid-x flex-dir-column align-justify">
										<h3 class="h4 no-underline">
											Years of <br>Experience
										</h3>
										<h3 class="h1 no-underline"><b>10</b></h3>
									</div>
								</div>
								<div class="cell stat-card">
									<a class="color-black bg-white h-100 grid-x flex-dir-column align-justify" href="#">
										<h3 class="h4 no-underline">
											Agency Clients<br> Served
										</h3>
										<h3 class="h1 no-underline">
												<b>36</b>
												<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><title>More info</title><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-40-176c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v-88c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64zm40-144c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32" fill="#B33E00"/></svg>
										</h3>
									</a>
								</div>
								<div class="cell stat-card">
									<div class=" bg-white h-100 grid-x flex-dir-column align-justify">
										<h3 class="h4 no-underline">
											Businesses and Organizations<br> Served
										</h3>
										<h3 class="h1 no-underline"><b>25</b></h3>
									</div>
								</div>
								<div class="cell stat-card">
									<div class=" bg-white h-100 grid-x flex-dir-column align-justify">
										<h3 class="h4 no-underline">
											Custom WordPress Themes
										</h3>
										<h3 class="h1 no-underline"><b>128+</b></h3>
									</div>
								</div>
								<div class="cell stat-card">
									<div class=" bg-white h-100 grid-x flex-dir-column align-justify">
										<h3 class="h4 no-underline">
											Existing Websites I've Worked On
										</h3>
										<h3 class="h1 no-underline"><b>177+</b></h3>
									</div>
								</div>
								<div class="cell stat-card">
									<div class=" bg-white h-100 grid-x flex-dir-column align-justify">
										<h3 class="h4 no-underline">
											Websites I've Both Designed & Built
										</h3>
										<h3 class="h1 no-underline"><b>13</b></h3>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<div class="screenshot-tickers">
						<?php get_template_part('template-parts/sections/section', 'ticker-slider');?>
						<?php get_template_part('template-parts/sections/section', 'ticker-slider');?>
						<?php get_template_part('template-parts/sections/section', 'ticker-slider');?>
						<?php get_template_part('template-parts/sections/section', 'ticker-slider');?>
					</div>
					
					<?php if ($featured_services->have_posts()):?>
						<?php while ($featured_services->have_posts()) : $featured_services->the_post();
							$slug = get_post_field('post_name', get_the_ID());
							$service_right_column = get_field('service_right_column') ?? null;	
							$col_classes = 'cell small-12';
							if( $service_right_column ) {
								$col_classes = 'cell small-12 tablet-6';	
							}
						?>
							<section id="<?=$slug;?>" class="<?=$slug;?> entry-content" itemprop="text">
								<div class="copy-wrap grid-container">
									<div class="grid-x grid-padding-x">
										<div class="cell small-12">
											<h2 class="text-center">Custom Wordpress Themes</h2>
										</div>
										<div class="<?=$col_classes;?>">
											<?php the_content();?>
										</div>
										<?php if($service_right_column):?>
											<div class="<?=$col_classes;?>">
												<?=wp_kses_post( $service_right_column );?>
											</div>
										<?php endif;?>
									</div>
								</div>
							</section>
						<?php endwhile; wp_reset_postdata();?>
					<?php endif;?>
					
					<?php if($slug == 'custom-wordpress-themes'):?>
						<?php if ($projects->have_posts()):?>
							<section class="case-studies entry-content bg-light-gray" itemprop="text">
								<div class="grid-container">
									<div class="grid-x grid-padding-x align-center align-middle">
										<div class="left cell small-12 large-shrink">
											<h2 class="h1">
												Case<br>Studies
											</h2>
										</div>
										<div class="sliders cell small-12 tablet-auto">
											<div class="grid-x grid-margin-x align-center">
												<div class="right cell small-12 tablet-auto">
													<div class="modal-triggers bg-white">
														<div class="swiper-wrapper">
															<?php while ($projects->have_posts()) : $projects->the_post();
																$slug = get_post_field('post_name', get_the_ID());
															?>
																<div class="swiper-slide">
																	<button data-open="<?=$slug;?>">
																	<?php the_post_thumbnail( 'large' );?>
																		<div class="mask grid-x align-middle align-center">
																			<img src="<?=get_template_directory_uri();?>/assets/images/info-icon-red-100.svg">
																		</div>
																	</button>
																</div>
																<div class="reveal" id="<?=$slug;?>" data-reveal>
																<button class="close-button" data-close aria-label="Close modal" type="button">
																	<span aria-hidden="true">&times;</span>
																</button>
																<h2><?php the_title();?></h2>
																</div>
															<?php endwhile; wp_reset_postdata();?>
														</div>
													</div>
												</div>
												<div class="center cell small-12 tablet-shrink bg-white">
													<button type="button" class="swiper-btn swiper-btn-prev grid-x align-center">
														<svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path fill="#667761" d="m75 0 25 50-25 50H0l25-50L0 0z"/></svg>
													</button> 
													<div class="thumbs">
														<div class="swiper-wrapper">
															<?php while ($projects->have_posts()) : $projects->the_post();
																$slug = get_post_field('post_name', get_the_ID());
															?>
																<div class="swiper-slide">
																	<div class="inner">
																		<?php the_post_thumbnail( 'medium' );?>
																	</div>
																</div>
															<?php endwhile; wp_reset_postdata();?>
														</div>
													</div>
													<button type="button" class="swiper-btn swiper-btn-next grid-x align-center"><svg width="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path fill="#667761" d="m75 0 25 50-25 50H0l25-50L0 0z"/></svg>
													</button> 
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						<?php endif;?>
					<?php endif;?>
					
					<?php if ($services->have_posts()):?>
						<div class="services grid-container">
							<div class="grid-x grid-padding-x">
								<?php while ($services->have_posts()) : $services->the_post();
									$slug = get_post_field('post_name', get_the_ID());
								?>
									<section id="<?=$slug;?>" class="<?=$slug;?> entry-content cell small-12 tablet-6" itemprop="text">
										<ul class="accordion h-100" data-accordion data-allow-all-closed="true" data-deep-link="true" data-update-history="true" data-slide-speed="500">
											<li class="accordion-item" data-accordion-item>
												<a href="#<?=$slug;?>" class="accordion-title">
													<h2><?php the_title();?></h2>
												</a>
												<div id="<?=$slug;?>" class="accordion-content" data-tab-content>
													<div class="animation-container">
														<?php the_content();?>
													</div>
												</div>
											</li>
										</ul>
									</section>
								<?php endwhile; wp_reset_postdata();?>
							</div>
						</div>
					<?php endif;?>
							
					<footer class="article-footer">
						 <?php wp_link_pages(); ?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();