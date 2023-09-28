<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper">
        <?php
        $featured_posts = get_sub_field('testimonial');
        if( $featured_posts ): ?>
            <div class="testimonial">
                <?php foreach( $featured_posts as $post ):

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>
                    <?php if ( has_post_thumbnail() ) { ?>
                        <div class="testimonial__image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php } ?>

                    <blockquote class="testimonial__content">

                        <div class="testimonial__text">
                            <?php the_field('quote'); ?>
                        </div>

                        <cite class="testimonial__bottom">
                            <div class="testimonial__info">
                                <p><b><?php the_field('name'); ?></b>
                                    <br>
                                    <span class="testimonial__job"><?php the_field('company'); ?></span>
                                </p>
                            </div>
                        </cite>
                    </blockquote>
                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
