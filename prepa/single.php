<?php
/**
 * The template for displaying any single post.
 *
 */

get_header(); // This fxn gets the header.php file and renders it ?>


		<main role="main">
			<?php if ( have_posts() ) : 
			// Do we have any posts in the databse that match our query?
			?>

				<?php while ( have_posts() ) : the_post(); 
				// If we have a post to show, start a loop that will display it
				?>
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
			<div id="intro-wrap">
				<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fade">
					<div class="intro-item" style="background-image: url(<?php echo $url; ?>);">
						<div class="photocaption">
							
						</div><!-- photocaption -->
					</div>												
				</div><!-- intro -->				
			</div><!-- intro-wrap -->

			<div id="main" class="row single single-post">
				<div class="row-content buffer-left buffer-right buffer-bottom">
					<div id="post-nav">
						<ul class="clear-after reset plain">
							<li id="prev-items" class="post-nav"><a href="#"><i class="fa fa-chevron-left"></i><span class="label">Prev</span></a></li> 
							<li id="all-items" class="post-nav"><a href="#"><i class="icon icon-images"></i></a></li> 							 
							<li id="next-items" class="post-nav"><a href="#"><span class="label">Next</span><i class="fa fa-chevron-right"></i></a></li>  
						</ul>
					</div>

					<div class="post-area clear-after">
						<article role="main">
						<h5 class="meta-post"><?php echo get_the_category_list('| &nbsp;', '&nbsp;'); // Display the categories this post belongs to, as links ?> - <time datetime="2013-11-09"><?php the_time('m.d.Y'); // Display the time it was published ?></time></h5>
							<h1><?php the_title(); // Display the title of the post ?></h1>
							<?php the_content(); 
								// This call the main content of the post, the stuff in the main text box while composing.
								// This will wrap everything in p tags
							?>
							<?php wp_link_pages(); // This will display pagination links, if applicable to the post ?>
							<div class="meta clearfix">
							<div class="tags"><?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); // Display the tags this post has, as links separated by spaces and pipes ?></div>
						</div><!-- Meta -->
						</article>

					</div><!-- post-area -->

					<div class="meta-social">
						<ul class="inline center">
							<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
						</ul>
					</div>

					<?php endwhile; // OK, let's stop the post loop once we've displayed it ?>
				
				<?php
					// If comments are open or we have at least one comment, load up the default comment template provided by Wordpress
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>


			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>
				
				<article class="post error">
					<h1 class="404">Nothing has been posted like that yet</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having a post or not having a post to show) ?>			
											
				</div><!-- row-content -->
			</div><!-- row -->

<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
