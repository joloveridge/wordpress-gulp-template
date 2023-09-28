<div class="general-text-block <?php the_sub_field('padding'); ?> background-<?php the_sub_field('background_colour'); ?> alignment-<?php the_sub_field('alignment'); ?>">
    <div class="wrapper">
        <div class="general-text-block__flex general-text-block__flex--<?php the_sub_field('alignment'); ?>">
            <div class="general-text-block__inner">
                <?php if ( get_sub_field( 'sub-title' ) ): ?>
                    <div class="sub-title"><?php the_sub_field('sub-title'); ?></div>
                <?php endif; ?>
                <?php if ( get_sub_field( 'title' ) ): ?>
                    <?php if ( get_sub_field('title_size') == true ) { ?>
                        <h2 class="large-title"><?php the_sub_field('title'); ?></h2>
                    <?php } else { ?>
                        <h2><?php the_sub_field('title'); ?></h2>
                    <?php } ?>
                <?php endif; ?>

                <?php if ( get_sub_field( 'text_area' ) ): ?>
                    <?php the_sub_field('text_area'); ?>
                <?php endif; ?>

                <?php
                $link = get_sub_field('button');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
