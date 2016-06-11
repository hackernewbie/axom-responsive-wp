<div class="col-sm-3">
<?php if ( is_active_sidebar( 'right_sidebar_one' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right_sidebar_one' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>

<?php if ( is_active_sidebar( 'right_sidebar_two' ) ) : ?>
	<div id="primary-sidebar-two" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'right_sidebar_two' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
</div>