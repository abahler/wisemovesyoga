<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<!-- start top section -->
			<div id="quote" class="feature">
				<!-- 
				ORIGINAL METHOD OF ROTATING QUOTES:
				<?php

					$quotes = array(
						"But he can make no progress with himself unless he becomes very much better acquainted with his own nature. ~ C.G.Jung, An Answer to Job",
						"Between stimulus and response there is a space. In that space is our power to choose our response. In our response lies our growth and our freedom. ~ Viktor Frankl",
						"Your task is not to seek for love, but merely to seek and find all the barriers within yourself that you have built. ~ Rumi",
						"What can we gain by sailing to the moon if we are not able to cross the abyss that separates us from ourselves? This is the most important of all voyages of discovery, and without it, all the rest are not only useless, but disastrous. ~ Thomas Merton",
						"You may not be what you think you are; but what you think, you are. - Jim Clark"
						);
			
					$n = count($quotes);
					$random = rand(0, ($n - 1));
					echo '<p>' . $quotes[$random] . '</p>'; 
			
				?> 
				-->
				<?php
				
				$args = array(
					'post_type' => 'quotes',
					'limit' => 1,
					'orderby' => 'rand'
				);
				
				$the_query = new WP_Query($args);
				
				?>
				<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php the_field('quote'); ?>
					<?php the_field('source'); ?>
				<?php endwhile; else: ?>
					<?php echo "<p>There are no quotes to display at this time.<br />Please try again later.</p>" ?>
				<?php endif; ?>
			</div><!-- end #quote -->
			
			<div id="desc" class="feature">
				<h1>Wise Moves Yoga</h1>
				<ul>
					<li>focus on your goals with gentle, customized poses</li>
					<li>build balanced alignment through awareness</li>
					<li>experience pain-free movement</li>
				</ul>	
			</div><!-- end #desc -->
			
			<div id="photo" class="feature">
				<img src="/wp-content/themes/twentytwelve/images/atgarden_big.jpg" alt="Allison Wilmes of Wise Moves Yoga" />
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>