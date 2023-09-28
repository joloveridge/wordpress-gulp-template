

<div class="<?php the_sub_field('padding'); ?> background-<?php the_sub_field('background_colour'); ?>">
    <div class="wrapper">
        <div class="statistics-block__title">
            <?php if ( get_sub_field( 'statistics_title' ) ): ?>
                <h2><?php the_sub_field('statistics_title'); ?></h2>
            <?php endif; ?>
        </div>
        <?php if( have_rows('statistics') ): ?>
            <div class="statistics-block">
                <div class="statistics-block__grid">
                    <?php while( have_rows('statistics') ): the_row(); ?>
                        <div class="statistics-block__grid__stat">
                            <h3><?php echo get_sub_field('statistic'); ?></h3>
                            <p><?php echo get_sub_field('text'); ?></p>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
</div>
