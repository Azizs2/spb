<?php
/**
 * Add listing edit
 *
 * Template can be modified by copying it to yourtheme/ulisting/add-listing/edit.php.
 **
 * @see     #
 * @package uListing/Templates
 * @version 1.0.1
 */
use uListing\Classes\StmListing;
use uListing\Classes\StmListingTemplate;

$listing =  $user->getListingById(sanitize_text_field($_GET['edit']));
$view = 'add-listing/form';
?>

<h2><?php esc_html_e('Edit listing', "tolips")?></h2>

<?php if($listing) :?>

<?php
	StmListingTemplate::load_template($view, array(
		'user'        => $user,
		'listing'     => $listing,
		'user_plans'  => $user_plans,
		'listingType' => $listing->getType(),
		'return_url'  =>  \uListing\Classes\StmUser::getUrl('my-listing'),
		'action'      => esc_html__('Update', "tolips")
	), true );
?>

<?php else: ?>

	<div class="alert alert-info margin-top-30"><?php esc_html_e('Listing not found', "tolips")?></div>

<?php endif;?>
