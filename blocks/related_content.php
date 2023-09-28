<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper">

        <h2><?php the_sub_field('main_title'); ?></h2>

        <?php
        $featured_posts = get_sub_field('select_related_content');
        if( $featured_posts ): ?>
        <div class="related-content">
            <?php foreach( $featured_posts as $post ):

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>

                <article class="related-content__card">
                    <div class="related-content__image">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                        <?php }else{ ?>
                        <?php } ?>
                    </div>

                    <div class="related-content__content">
                        <h2 class="related-content__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p class="related-content__excerpt"><?php the_field('excerpt'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">Learn more</a>
                    </div>
                </article>

                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
