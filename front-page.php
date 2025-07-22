<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package trailhead
 */

get_header();

$years_in_biz = date("Y") - 2015;

?>

	<main id="primary" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();?>
			<div class="grid-container">
				<div class="h1 hello"><span>H</span><span>e</span><span>l</span><span>l</span><span>o</span> <span>T</span><span>h</span><span>e</span><span>r</span><span>e</span><span>!</span></div>
				
				<p>My name is Michael Heimes.</p>
				
				<p>I'm a Freelance Web Developer that specializes in custom WordPress Theming. <br>For <?=$years_in_biz;?> years, as either client-facing or a white-label role, I've been helping:</p>
				
				<ul>
					<li>
						<b>Agency parters without in-house developers</b> <i>by providing white-label web development and/or consulting throughout the project</i>
					</li>
					<li>
						<b>Agency parters with overflow work</b> <i>by working on projects independently or as part of a team</i>
					</li>
					<li>
						<b>Businesses who have a website</b> <i>by working with an existing website that needs bugs squashed, modifications, or additions</i>
					</li>
					<li>
						<b>Businesses who don't have a website</b> <i>by determining a rough scope and referring to an agency parter or doing a design/build myself</i>
					</li>
				</ul>
				
				80 websites
				
				
			</div>

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
