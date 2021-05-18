<?php include('header.php'); ?>

<?php
if ( has_post_thumbnail( $post->ID ) ) :
    $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $imageUrl = $imageInfo[0];
else:
    $imageUrl = get_field('default_image_banner', 'options');
endif;
?>

<div class="hero" style="background-image: url('<?php echo $imageUrl; ?>');">
    <div class="hero__overlay"></div>
    <div class="wrapper">
        <div class="hero__inner">
            <div class="hero__content">
                <h1 class="hero__title">Hero title</h1>
            </div>
        </div>
    </div>
</div>
<main id="maincontent">
    <div class="wrapper">

        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_content() ;?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>


<?php include('footer.php'); ?>