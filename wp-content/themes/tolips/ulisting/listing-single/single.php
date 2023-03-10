<?php
/**
 * Listing single single
 *
 * Template can be modified by copying it to yourtheme/ulisting/listing-single/single.php.
 *
 * @see     #
 * @package uListing/Templates
 * @version 1.0
 */
use uListing\Classes\StmListing;
use uListing\Classes\StmListingTemplate;
?>
<?php get_header(); ?>
	<section id="wp-main-content" class="clearfix main-page">
		<div class="stm-container-full">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$model = StmListing::load(get_post());
					if($model->post_type == 'listing')
						StmListingTemplate::load_template( 'listing-single/content', [ 'model' => $model ], true );
					else
						echo the_content();
				endwhile;
			endif; ?>
		</div>
	</section>		
<?php get_footer();?>