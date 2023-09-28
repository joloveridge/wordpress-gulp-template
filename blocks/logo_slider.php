<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper">
        <div class="center">
            <h2 class="logo-slider__title"><?php the_sub_field('title'); ?></h2>
        </div>
        <?php if( have_rows('logo_slider') ): ?>
            <div class="logo-slider">
                <?php while( have_rows('logo_slider') ): the_row();
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                    ?>
                    <div class="logo-slider__slide">
                        <?php if ( get_sub_field( 'link' ) ): ?>
                            <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>">
                        <?php endif; ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" />
                        <?php if ( get_sub_field( 'link' ) ): ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
