<?php include('header.php'); ?>

<main id="maincontent">
    <div class="wrapper">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_content() ;?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>


<?php include('footer.php'); ?>