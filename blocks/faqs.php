
<div class="<?php the_sub_field('padding'); ?>">
    <div class="wrapper-small">
        <div class="center">
            <h2>FAQs</h2>
        </div>
        <?php
        $featured_posts = get_sub_field('faqs');
        if( $featured_posts ): ?>
            <dl class="faqs">
                <?php foreach( $featured_posts as $post ):

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                    <dt class="accordion"><?php the_title(); ?></dt>
                    <dd id="<?php echo get_the_ID(); ?>" class="accordion-panel">
                        <div class="accordion-panel__inner">
                            <?php the_content(); ?>
                        </div>
                    </dd>


                <?php endforeach; ?>
            </dl>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>


<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
