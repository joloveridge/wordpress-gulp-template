<div class="<?php the_sub_field('padding'); ?> background-<?php the_sub_field('colour_scheme'); ?>">
    <div class="wrapper">
        <div class="general-text-block__flex general-text-block__flex--<?php the_sub_field('intro_alignment'); ?>">
            <div class="general-text-block__inner">
                <div class="sub-title"><?php the_sub_field('sub_line'); ?></div>
                <h2><?php the_sub_field('title'); ?></h2>
                <?php the_sub_field('intro_text'); ?>
            </div>
        </div>
    <div class="tab-container tab-container--vertical">
        <?php if( have_rows('tabs') ):  $i = 0; ?>
        <div class="tab-container__left" id="vertical-tab">
            <ul aria-controls="vertical-tab" role="tablist">
                <?php while( have_rows('tabs') ): the_row();
                    $i++;
                    $image = get_sub_field('icon');
                    $title = get_sub_field('tab_title');
                    $text = get_sub_field('tab_text');
                    ?>
                    <li class="tab-button" role="tab" aria-controls="tab-<?php echo get_row_index(); ?>" tabindex="0" aria-selected="<?php if($i == 1){echo "true";}?>">
                        <h3><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" /><span><?php echo $title; ?></span></h3>
                        <p><?php echo $text; ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>

        <?php if( have_rows('tabs') ):  $i = 0; ?>
            <main>
                <?php while( have_rows('tabs') ): the_row();
                    $i++;
                    $image = get_sub_field('main_image');
                    ?>
                    <div id="tab-<?php echo get_row_index(); ?>" role="tabpanel" aria-expanded="<?php if($i == 1){echo "true";}?>">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="<?php echo $image['height']; ?>" width="<?php echo $image['width']; ?>" />
                    </div>
                <?php endwhile; ?>
            </main>
        <?php endif; ?>
    </div>
    </div>

    <script>
        $(".tab-button").click(function(event) {
            var offset = this.offsetLeft;
            var parentWidth = $(this).parent().width();
            var width = $(this).outerWidth();
            $(this).parent().animate({
                scrollLeft: offset - ((parentWidth - width) / 2.0)
            }, 500)
        });
    </script>
</div>
