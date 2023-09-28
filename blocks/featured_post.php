<div class="<?php the_sub_field('padding'); ?>">
<div class="wrapper">
    <?php
    $featured_posts = get_sub_field('featured_post');
    if( $featured_posts ): ?>

            <?php foreach( $featured_posts as $post ):

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <div class="featured-post">
                    <div class="featured-post__inner">
                        <div class="featured-post__image">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
                        <?php } ?>
                        </div>

                        <div class="featured-post__content">
                            <div>
                                <h2 class="featured-post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <p><?php echo excerpt(60); ?></p>
                                <a href="<?php the_permalink(); ?>" class="button">View case study</a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        <?php
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); ?>
    <?php endif; ?>
</div>
</div>
