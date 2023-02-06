<?php
/**
 * Add listing field region
 *
 * Template can be modified by copying it to yourtheme/ulisting/add-listing/field/region.php.
 *
 * @see     #
 * @package uListing/Templates
 * @version 1.3.6
 */
?>
<?php if(isset($attribute->title)):?>
    <div class="ulisting-form-gruop">
        <label><?php echo esc_html($attribute->title)?></label>
        <div class="stm-listing-select">
            <ulisting-select2 :options='attributes.<?php echo esc_attr($attribute->name)?>.options' :text="'name'" v-model='attributes.<?php echo esc_attr($attribute->name)?>.value' theme=''></ulisting-select2>
            <span v-if="errors['<?php echo esc_attr($attribute->name)?>']" class="text-danger">{{errors['<?php echo esc_attr($attribute->name)?>']}}</span>
        </div>
    </div>
<?php endif;?>