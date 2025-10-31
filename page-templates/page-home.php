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
?>
	<div class="content">
		<div class="inner-content">

			<main id="primary" class="site-main">
		
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
					<header class="entry-header home-banner">
						<div class="grid-container">
						<div class="grid-x grid-padding-x align-middle">
							<div class="cell small-12 tablet-3">
								<div class="img-wrap">
								<img src="<?=get_template_directory_uri();?>/dist/images/banner-img-2.jpg">
								</div>
							</div>
							<div class="cell small-12 tablet-9">
								<h1>Web / WordPress Development<br> by Michael Heimes</h1>
							</div>
						</div>
						</div>
					</header><!-- .entry-header -->
				
					<section class="entry-content" itemprop="text">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12 tablet-7">
								<h2>Hello!</h2>
								<div class="p-2">
								<p>My name is Michael Heimes. I’m a Freelance Senior Front-end Developer based in West Reading, PA (USA).</p>
								<p>For over a decade I’ve been helping clients with bespoke solutions tailored to their unique needs.</p>
								<p>I specialize in building custom WordPress themes building pixel-perfect reproductions of the UI design with the functionality the client requires. I work in both project-based and retainer / fractional roles as the sole developer resource, part of a team of developers, and taking on overflow for clients with in-house developers.</p>
								</div>
								<p><strong>I pride myself in:</strong></p>
								<ul>
								<li>
									<a href="#">
										my technical proficiency
										<svg width="16" heigh="16" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><title>More Info</title><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-40-176c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v-88c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64zm40-144c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32"/></svg>
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
																</div>
								<div class="cell small-12 tablet-5 p-2">
									<h2>Service Menu</h2>
									<ul>
										<li>
											<a href="#custom-wordpress-themes">Custom WordPress Themes</a>
											<ul>
												<li>ACF
													<ul>
														<li>Custom Templates</li>
														<li>Custom Flexible Content Modules</li>
														<li>Custom Blocks</li>
													</ul>
												</li>
												<li>Elementor</li>
											</ul>
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
					</section>
					
					<?php get_template_part('template-parts/sections/section', 'tech-stack-logos');?>
					
					<section class="entry-content text-center" itemprop="text">
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h2>Quick Stats</h2>
								</div>
							</div>
							<div class="grid-x grid-padding-x align-center small-up-2 medium-up-3 large-up-4">
								<div class="cell">
									<h3 class="h5">
										Years of Experience
									</h3>
									<h3 class="h1"><b>10</b></h3>
								</div>
								<div class="cell">
									<h3 class="h5">
										Agency Clients<br> Served
									</h3>
									<h3 class="h1">
										<a href="#">
											<b>36</b>
											<svg width="20" heigh="20" xmlns="http://www.w3.org/2000/svg" viewBox="64 64 512 512"><!--!Font Awesome Pro 7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2025 Fonticons, Inc.--><path d="M320 112c114.9 0 208 93.1 208 208s-93.1 208-208 208-208-93.1-208-208 93.1-208 208-208m0 464c141.4 0 256-114.6 256-256S461.4 64 320 64 64 178.6 64 320s114.6 256 256 256m-40-176c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24h-8v-88c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24s10.7 24 24 24h24v64zm40-144c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32"/></svg>
										</a>
									</h3>
								</div>
								<div class="cell">
									<h3 class="h5">
										Businesses and Organizations<br> Served
									</h3>
									<h3 class="h1"><b>25</b></h3>
								</div>
								<div class="cell">
									<h3 class="h5">
										Custom WordPress Themes
									</h3>
									<h3 class="h1"><b>128+</b></h3>
								</div>
								<div class="cell">
									<h3 class="h5">
										Existing Websites I've Worked On
									</h3>
									<h3 class="h1"><b>177+</b></h3>
								</div>
								<div class="cell">
									<h3 class="h5">
										Websites I've Designed & Built
									</h3>
									<h3 class="h1"><b>13</b></h3>
								</div>
							</div>
						</div>
					</section>
					
					
					<section id="custom-wordpress-themes" class="entry-content" itemprop="text">
						
						<code>autoscroll slider here with a mosaic of screenshots</code>
						
						<div class="grid-container">
							<div class="grid-x grid-padding-x">
								<div class="cell small-12">
									<h2 class="text-center">Custom Wordpress Themes</h2>
								</div>
								<div class="cell small-12 tablet-6">
									<p><b>With over 128 Custom WordPress themes built,</b> I've integrated into dozens of workflows, tools, and project management systems & software. Through years of working in existign workflows and systems, I've developed my own for when one doesn't already exist.</p>
									<p>My personal workflow includes Foundation UI Framework, Advanced Custom Fields, and vanilla Javascript. The goal of my workflow is to increase speed and productivity while reducing complexity for other developers that may pick up where I leave off.</p>
								</div>
								<div class="cell small-12 tablet-6">
									<p><b>My approach to each project is the result of thorough discovery so that I may understand:</b>
										<ul>
											<li>Who will be managing the CMS content and what is their skill-level.</li>
											<li>Determine any planned scaling to future-proof scalability.</li>
											<li>
												Determining the best approach with ACF: custom templates, custom flexible content module, custom blocks or any combination of options.
											</li>
											<li>Finding the right balance of flexibility and locked-down structure and styles.</li>
											<li>Accessibility Requirements</li>
										</ul>
									</p>
								</div>
							</div>
						</div>
						
						<code>case studies?</code>
						
					</section>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-6">
								<section id="modifying-existing-websites" class="entry-content" itemprop="text">
									<h2>Modifying Existing websites</h2>
									<p><b>No matter what the codebase or page builder I can help with:</b></p>
									<ul>
										<li>Building new custom pages</li>
										<li>Designing (in the browser) and Building new custom pages & elements</li>
										<li>Adding new custom elements</li>
										<li>Changing layouts / structure</li>
										<li>Handle rebranding</li>
									</ul>
								</section>
							</div>
							<div class="cell small-12 tablet-6">
								<section id="wordpress-maintenance" class="entry-content" itemprop="text">
									<h2>Wordpress Maintenance</h2>
									<p><b>Keeping a WordPress site secure, fast, and fully functional includes Core, Theme, and Plugin Updates as well as:</b></p>
									<ul>	
										<li>Remediation for post-update errors</li>
										<li>Replacing abandoned plugins</li>
										<li>Replacing deprecated code</li>
									</ul>
								</section>
							</div>
						</div>
					</div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-6">
								<section id="wordpress-maintenance" class="entry-content" itemprop="text">
									<h2>Wordpress Maintenance</h2>
									<p><b>Keeping a WordPress site secure, fast, and fully functional includes Core, Theme, and Plugin Updates as well as:</b></p>
									<ul>	
										<li>Remediation for post-update errors</li>
										<li>Replacing abandoned plugins</li>
										<li>Replacing deprecated code</li>
									</ul>
								</section>
							</div>
							<div class="cell small-12 tablet-6">
								<section id="web-performance-optimization">
									<h2>Performance Optimization</h2>
									<p><b>Improving a site’s speed, performance, and efficiency includes:</b></p>
									<ul>
										<li>Performance Auditing</li>
										<li>Seed Optimization
											<ul>
												<li>Page Caching</li>
												<li>Browser Caching / GZIP Compression</li>
												<li>Code Minification</li>
												<li>Object Caching</li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-6">
								<section id="accessibility-compliance" class="entry-content" itemprop="text">
									<h2>Accessibility Compliance</h2>
									<p><b>Ensuring that your website is usable by everyone, including people with disabilities who rely on assistive technologies like screen readers, keyboard navigation, and voice control requires:</b></p>
									<ul>
										<li>A comprehensive audit</li>
										<li>Determining the level of compliance you require
											<ul>
												<li>WCAG 2.1 AA (or higher)</li>
												<li>ADA Title III</li>
											</ul>
										</li>
										<li>Keyboard Navigation</li>
										<li>Screen Reader Compatibility</li>
										<li>Color & Contrast</li>
									</ul>
								</section>
							</div>
							<div class="cell small-12 tablet-6">
								<section id="bug-squashing" class="entry-content" itemprop="text">
									<h2>Bug Squashing</h2>
									<p><b>Technical issues that affect your website’s performance, functionality, or user experience can be the result of:</b></p>
									<ul>
										<li>Broken code</li>
										<li>Deprecated code</li>
										<li>Flaws discovered in UX approach</li>
										<li>Browser-specific issues</li>
									</ul>
								</section>
							</div>
						</div>
					</div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							<div class="cell small-12 tablet-6">
								<section id="static-websites-emails" class="entry-content" itemprop="text">
									<h2>Static Websites & Emails</h2>
									<p><b>Outside of the WordPress ecosystem I have built:</b></p>
									<ul>
										<li>Static HTML Websites</li>
										<li>Custom Emails</li>
										<li>Web apps built to be dropped into existing websites</li>
										<li>Web apps for Touch Kiosks</li>
										<li>Web apps for tablet-controlled sales presentations</li>
									</ul>
								</section>
							</div>
							<div class="cell small-12 tablet-6">
								<section id="web-design" class="entry-content" itemprop="text">
									<h2>Web Design</h2>
									<p>Occasionally I'll take on small-to-medium scale Design/Build projects for businesses and organization. I use a "design  int he browser" approach by building prototypes as function websites which speeds up the design/development process while increasing value.</p>
								</section>
							</div>
						</div>
					</div>
							
					<footer class="article-footer">
						 <?php wp_link_pages(); ?>
					</footer> <!-- end article footer -->
						
				</article><!-- #post-<?php the_ID(); ?> -->
		
			</main><!-- #main -->
				
		</div>
	</div>

<?php
get_footer();