

<div class="<?php the_sub_field('padding'); ?> background-<?php the_sub_field('background_colour'); ?>">
    <div class="wrapper">
        <div class="list-block__title">
            <?php if ( get_sub_field( 'statistics_title' ) ): ?>
                <h2><?php the_sub_field('statistics_title'); ?></h2>
            <?php endif; ?>
        </div>
        <?php if( have_rows('list') ): ?>
            <div class="list-block">
                <ul class="list-block__grid">
                    <?php while( have_rows('list') ): the_row(); ?>
                        <li class="list-block__item">
                            <?php echo get_sub_field('list_item'); ?>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
</div>
