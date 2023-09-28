<div class="<?php the_sub_field('padding'); ?>">

        <?php if( have_rows('carousel') ): ?>
            <div class="carousel">
                <?php while( have_rows('carousel') ): the_row();
                    $image = get_sub_field('image');
                    $text = get_sub_field('text_area');
                    $title = get_sub_field('title');
                    $link = get_sub_field('button');
                    ?>
                    <div>
                        <div class="carousel__slide">
                            <div class="carousel__image">
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" />
                            </div>
                            <h2 class="carousel__title"><?php echo $title; ?></h2>
                            <?php echo $text; ?>
                            <?php if ( get_sub_field( 'button' ) ): ?>
                            <a class="button" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

</div>
