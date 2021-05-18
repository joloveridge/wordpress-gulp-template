<?php include('header.php'); ?>

<main id="maincontent">
    <div class="wrapper">
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('news-article'); ?>>
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="news-article__image">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                    </div>
                <?php } else { ?> <?php } ?>
                <div class="news-article__content">
                    <h2><?php the_title(); ?></h2>
                    <p><?php echo excerpt(30); ?></p>
                    <a href="<?php the_permalink(); ?>" class="read-more">Read more</a>
                </div>
            </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>


<?php include('footer.php'); ?>