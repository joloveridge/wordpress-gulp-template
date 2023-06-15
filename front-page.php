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

        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <p>Lorem ipsum dolor sit amet, <a href="#"> consectetur adipiscing elit.</a> Pellentesque sit amet nulla magna. Nam tincidunt nisl vulputate velit accumsan lacinia. Duis consequat vestibulum ipsum, et molestie nunc commodo eget. Suspendisse justo purus, luctus quis vehicula interdum, egestas a magna. Suspendisse potenti. Aliquam sit amet mi suscipit, mattis metus a, rhoncus metus. Nam iaculis sit amet nulla sed efficitur. Duis ornare libero at eros sagittis volutpat. In in vestibulum diam. Aliquam non diam volutpat, convallis lacus vel, fringilla nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean volutpat commodo purus, quis convallis augue porta et. Nam tortor risus, tincidunt at tincidunt sed, tempus id mauris.</p>
        <ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>

        <ol>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
            <li>Ordered list item</li>
        </ol>

        <blockquote>
            <p>help create a legacy for future generations</p>
        </blockquote>

        <table cellpadding="0" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Table header</th>
                <th>Table header</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
            </tr>
            <tr>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
            </tr>
            <tr>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
                <td>Pellentesque sit amet nulla magna. Nam tincidunt nisl </td>
            </tr>
            </tbody>
        </table>
        <a href="#" class="button">Button</a>

        <form>
            <h2>A form title</h2>
            <p>Lorem ipsum dolor sit amet, <a href="#"> consectetur adipiscing elit.</a> Pellentesque sit amet nulla magna. Nam tincidunt nisl vulputate velit accumsan lacinia. Duis consequat vestibulum ipsum, et molestie nunc commodo eget. Suspendisse justo purus, luctus quis vehicula interdum, egestas a magna. Suspendisse potenti. Aliquam sit amet mi suscipit, mattis metus a, rhoncus metus. Nam iaculis sit amet nulla sed efficitur. Duis ornare libero at eros sagittis volutpat. In in vestibulum diam. Aliquam non diam volutpat, convallis lacus vel, fringilla nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean volutpat commodo purus, quis convallis augue porta et. Nam tortor risus, tincidunt at tincidunt sed, tempus id mauris.</p>

            <div class="form-row">
                <label>Form label</label>
                <input type="text" />
            </div>
            <div class="form-row">
                <label>Form label</label>
                <textarea></textarea>
            </div>
            <div class="form-row">
                <input class="submit-button" type="submit" value="Submit" />
            </div>
        </form>

        <blockquote class="callout">
            <p>This is a blockquote</p>
            <cite>Citation</cite>
        </blockquote>


        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php the_content() ;?>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>


<?php include('footer.php'); ?>
