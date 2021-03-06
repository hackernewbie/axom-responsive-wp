<?php get_header(); ?>
<div class="div-main-data-wrapper">
	<div class="text-left" id="main-section">
		<div class="row">
			<div class="col-sm-9">
				<?php while(have_posts()) : the_post();?>
					<div class='blog-post'>
						<h2><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h2>
						<div class='blogpost-meta'>
							<span class='glyphicon glyphicon-user'><i class='meta-beautify'>By <?php the_author_posts_link(); ?>&nbsp;</i></span>
							<span class='glyphicon glyphicon-calendar'><i class='meta-beautify'>&nbsp;<?php the_time('F jS Y'); ?>&nbsp;</i></span>
							
						</div>
						<?php if(has_post_thumbnail()) { ?>
							<div class='featured-image'>
								<?php the_post_thumbnail( 'medium_large' ); ?>
							</div>
						<?php } ?>
						<div class='blog-post-text'>
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>