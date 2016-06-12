<?php get_header(); ?>
<div class="container-float text-left div-banner-section-parent" id="main-section">
	<div class="row">
		<div class="col-sm-12">
			<div class='div-banner-section' id='div-banner-section'>
				<img src='<?php echo get_bloginfo('template_directory');?>/images/10.jpg' class='img img-responsive'/>
			</div>
		</div>
	</div>
</div>
<div class="div-main-data-wrapper">
	<div class="container text-left" id="main-section">
		<div class="row">
			<div class="col-sm-9">
				<?php while(have_posts()) : the_post();?>
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
								<img src='<?php echo get_bloginfo('template_directory');?>/images/DSC_0097.jpg' class='img img-responsive' alt='image alt' />
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
	<?php comments_template(); ?>
<?php get_footer(); ?>
