<?php
/**
 * Loop category
 *
 * Template can be modified by copying it to yourtheme/ulisting/loop/category.php.
 *
 * @see     #
 * @package uListing/Templates
 * @version 1.0
 */
?>
<div <?php echo \uListing\Classes\Builder\UListingBuilder::generation_html_attribute($element) ?> >
	<?php 
		foreach ($args['model']->getCategory() as $category):
			$html = ($element['params']['template']) ? \uListing\Classes\StmListingItemCardLayout::render_category($element['params']['template'], $category) : '';
			echo html_entity_decode($html);
		endforeach;
	?>
</div>

