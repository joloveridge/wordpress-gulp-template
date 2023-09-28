
<?php if ( get_sub_field('full_width') == true ) { ?>
    <div class="text-image-block__full-width text-image-block__full-width--<?php the_sub_field('alignment'); ?> <?php the_sub_field('padding'); ?> background-<?php the_sub_field('background_colour'); ?> ">
        <div class="wrapper">
            <div class="text-image-block text-image-block--<?php the_sub_field('alignment'); ?>">

                <div class="text-image-block__content">
                    <?php
                    $icon = get_sub_field('icon');
                    if( !empty( $icon ) ): ?>
                        <img src="<?php echo $icon['url'] ?>" class="text-image-block__icon" alt="<?php echo $icon['alt'] ?>" height="<?php echo $icon['height'] ?>" width="<?php echo $icon['width'] ?>" />
                    <?php endif; ?>
                    <?php if ( get_sub_field( 'sub-title' ) ): ?>
                        <div class="sub-title"><?php the_sub_field('sub-title'); ?></div>
                    <?php endif; ?>
                    <?php if ( get_sub_field( 'title' ) ): ?>
                        <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if ( get_sub_field( 'text_area' ) ): ?>
                        <?php the_sub_field('text_area'); ?>
                    <?php endif; ?>

                    <?php
                    $link = get_sub_field('button');
                    if( $link ): ?>
                        <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <div class="text-image-block__image">
            <?php
            $image = get_sub_field('image');
            if( !empty( $image ) ): ?>
                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>" />
            <?php endif; ?>
        </div>
    </div>
<?php } else { ?>
    <div class="<?php the_sub_field('padding'); ?>">
        <div class="wrapper">
            <div class="text-image-block text-image-block--<?php the_sub_field('alignment'); ?> background-<?php the_sub_field('background_colour'); ?>">

                <div class="text-image-block__content">
                    <?php
                    $icon = get_sub_field('icon');
                    if( !empty( $icon ) ): ?>
                        <img src="<?php echo $icon['url'] ?>" class="text-image-block__icon" alt="<?php echo $icon['alt'] ?>" height="<?php echo $icon['height'] ?>" width="<?php echo $icon['width'] ?>" />
                    <?php endif; ?>

                    <?php if ( get_sub_field( 'sub-title' ) ): ?>
                        <div class="sub-title"><?php the_sub_field('sub-title'); ?></div>
                    <?php endif; ?>
                    <?php if ( get_sub_field( 'title' ) ): ?>
                        <h2><?php the_sub_field('title'); ?></h2>
                    <?php endif; ?>

                    <?php if ( get_sub_field( 'text_area' ) ): ?>
                        <?php the_sub_field('text_area'); ?>
                    <?php endif; ?>

                    <?php
                    $link = get_sub_field('button');
                    if( $link ): ?>
                        <a class="button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>
                <div class="text-image-block__image">
                    <?php
                    $image = get_sub_field('image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" width="<?php echo $image['width'] ?>" height="<?php echo $image['height'] ?>" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
