<footer class="footer">
    <div class="wrapper">
        <div class="footer__inner">
            <div class="footer__col">
                <h4>Footer title</h4>
                <nav>
                    <ul>
                        <li><a href="#">A link</a> </li>
                        <li><a href="#">A link</a> </li>
                        <li><a href="#">A link</a> </li>
                        <li><a href="#">A link</a> </li>
                    </ul>
                </nav>
            </div>
            <div class="footer__col">
                <h4>Contact</h4>
                <address>
                    <?php the_field('office_address', 'options'); ?>
                </address>
                <?php the_field('email_address', 'options'); ?>
                <?php the_field('phone_number', 'options'); ?>
            </div>
            <div class="footer__col">
                <h4>Social Media</h4>
                <?php if( have_rows('social_media', 'options') ): ?>
                    <ul class="social">
                        <?php while( have_rows('social_media', 'options') ): the_row();
                            $link = get_sub_field('link');
                            $icon = get_sub_field('icon');
                            $text = get_sub_field('text');
                            ?>
                            <li>
                                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $icon; ?> <span class="hidden"><?php echo $text; ?></span> </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="wrapper">
            <div class="footer__bottom__inner">
                <p>Copyright <?php echo date("Y"); ?></p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>
