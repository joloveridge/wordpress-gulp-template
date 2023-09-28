<div class="<?php the_sub_field('padding'); ?>">

    <div class="wrapper">
        <?php if (get_sub_field('main_title')) : ?>
            <h2 class="testimonial-cols__testimonial-title"><?php the_sub_field('main_title'); ?></h2>
        <?php endif; ?>

        <?php
        $featured_posts = get_sub_field('select_testimonials');
        if( $featured_posts ): ?>
            <div class="testimonial-cols">
                <?php foreach( $featured_posts as $post ):

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <article class="testimonial-cols__card">

                        <div class="testimonial-cols__top">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <div class="testimonial-cols__image">
                               <?php the_post_thumbnail(); ?>
                            </div>
                        <?php } ?>
                            <div class="testimonial-cols__info">
                                <?php the_field('name'); ?>
                                <?php the_field('company'); ?>
                            </div>
                        </div>

                        <blockquote class="testimonial-cols__quote">
                            <?php the_field('quote') ?>
                        </blockquote>
                    </article>

                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
