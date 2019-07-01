<?php
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>


	<?php if ( has_post_thumbnail() && !post_password_required() ) : ?>
		<div class="entry-thumbnail post-media post-image">
			<?php 
			if(!empty(get_the_post_thumbnail_url())){
				echo "<img src='".get_the_post_thumbnail_url()."' style='width:100%;'/>";
			}
			?>
			<br />
			<?php geobin_post_meta(); ?>
		</div>
	<?php endif; ?>
	<div class="post-body clearfix">

		<!-- Article content -->
		<div class="entry-content">
			<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( esc_html__( 'Continue lendo &rarr;', 'geobin' ) );

				geobin_link_pages();
			}
			?>
		</div> <!-- end entry-content -->
		<?php //geobin_single_post_footer
		geobin_single_post_footer();
		?>
    </div> <!-- end post-body -->

