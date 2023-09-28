
<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper">
        <div class="text-image-cols__top">
            <?php if ( get_sub_field( 'main_title' ) ): ?>
                <?php if ( get_sub_field('title_size') == true ) { ?>
                    <h2 class="large"><?php the_sub_field('main_title'); ?></h2>
                <?php } else { ?>
                    <h2><?php the_sub_field('main_title'); ?></h2>
                <?php } ?>
            <?php endif;?>
            <?php if ( get_sub_field( 'intro_text' ) ): ?>
                <?php the_sub_field('intro_text'); ?>
            <?php endif; ?>
        </div>
        <?php $alignment = get_sub_field('icon_alignment'); ?>
        <div class="text-image-cols text-image-cols--<?php the_sub_field('number_of_columns'); ?>">
        <?php if( have_rows('columns') ): ?>
            <?php while( have_rows('columns') ): the_row();
                $image = get_sub_field('icon');
                $title = get_sub_field('title');
                $text = get_sub_field('text');
                $button = get_sub_field('button');

                ?>
                <div class="text-image-cols__card">
                    <?php if ( get_sub_field( 'icon' ) ): ?>
                    <div class="text-image-cols__image">
                        <img class="icon-<?php echo $alignment; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" />
                    </div>
                        <?php endif; ?>
                    <?php if ( get_sub_field( 'title' ) ): ?>
                        <h3><?php echo $title; ?></h3>
                    <?php endif; ?>
                        <?php if ( get_sub_field( 'text' ) ): ?>
                    <?php echo $text; ?>
                    <?php endif; ?>
                    <?php if ( get_sub_field( 'button' ) ): ?>
                        <a href="<?php echo $button['url']; ?>" title="<?php echo $button['title']; ?>" class="button"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>
</div>
