<?php
get_header(); ?> 
<div id="content div-main-data-wrapper-for-category" role="main" class="div-main-data-wrapper-for-category">
<div class="text-left" id="main-section">
		<div class="row">
			<div class="col-sm-9">
				<?php 
				// Check if there are any posts to display
				if ( have_posts() ) : ?>
					
					<header class="archive-header">
						<h1 class="archive-title">Destination: <?php single_cat_title( '', true ); ?></h1>
						<?php
						// Display optional category description
						 if ( category_description() ) : ?>
							<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>
					</header>
					<?php
					// The Loop
					while ( have_posts() ) : the_post(); ?>
						<div class='blog-post'>
						<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
						<div class='blogpost-meta'>
							<span class='glyphicon glyphicon-user'><i class='meta-beautify'>By <?php the_author_posts_link(); ?>&nbsp;</i></span>
							<span class='glyphicon glyphicon-calendar'><i class='meta-beautify'>&nbsp;<?php the_time('F jS Y'); ?>&nbsp;</i></span>
							<span class='glyphicon glyphicon-comment'><i class='meta-beautify'>&nbsp;  <a href='<?php comments_link(); ?>' class="comments"> <?php comments_number();?></a>  </i></span>
							<span class='glyphicon glyphicon-tags'><i class='meta-beautify'>&nbsp;<?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></i></span>
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<div class='featured-image'>
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</div>
						<?php } ?>
						<div class='blog-post-text'>
							<?php the_excerpt(); ?>
						</div>
						<div class='div-blog-bottom'>
							<a href="<?php the_permalink(); ?>" class="btn btn-default btn-lg btn-read-more">
						    	<span class="glyphicon glyphicon glyphicon-check"></span>Read More 
					        </a>
						</div>
					</div>
					<?php endwhile; ?>
					<div class="bottom-nav">
						<div class="bottom-prev-post">
							<?php next_posts_link( 'Previous posts' ); ?>
						</div>
						<div class="bottom-next-post">
							<?php previous_posts_link( 'Newer posts' ); ?>
						</div>
					</div>
				<?php else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>