<div class="<?php the_sub_field('padding'); ?>">


<?php if ( get_sub_field('full_width') == false ) { ?>

    <div class="wrapper">
        <?php
        $image = get_sub_field('image');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
        <?php endif; ?>
    </div>

<?php } else { ?>

    <?php
    $image = get_sub_field('image');
    if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="<?php echo esc_attr($image['width']); ?>" height="<?php echo esc_attr($image['height']); ?>" />
    <?php endif; ?>

<?php } ?>

</div>
