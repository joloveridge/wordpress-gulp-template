<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper">

<!--        <h2>--><?php //the_sub_field('main_title'); ?><!--</h2>-->

        <?php
        $featured_posts = get_sub_field('select_team_members');
        if( $featured_posts ): ?>
            <div class="team-members">
                <?php foreach( $featured_posts as $post ):

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                    <div class="team-members__card">
                        <div> <!-- Leave this,  it's using flex to make all the buttons align -->
                            <div class="team-members__image">
                                <?php if ( has_post_thumbnail() ) { ?>
                                   <?php the_post_thumbnail(); ?>
                                <?php }else{ ?>
                                <?php } ?>
                            </div>
                            <div class="team-members__content">
                                <h2 class="team-members__title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                                <p class="team-members__role"><?php the_field('role'); ?></p>
                                <p class="team-members__excerpt"><?php the_field('short_description'); ?></p>
                            </div>
                        </div>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="button button--small button--plus">Learn more</a>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
</div>
