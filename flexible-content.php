<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

    // are there any rows within within our flexible content?
    if( have_rows('content_blocks') ):

        // loop through all the rows of flexible content
        while ( have_rows('content_blocks') ) : the_row();

            // Introduction block

            if( get_row_layout() == 'icon_&_text_columns' )
                get_template_part('blocks/icon_&_text_columns');

            if( get_row_layout() == 'image_&_text_columns' )
                get_template_part('blocks/image_&_text_columns');

            if( get_row_layout() == 'general_text_block' )
                get_template_part('blocks/general_text_block');

            if( get_row_layout() == 'text_&_image_block' )
                get_template_part('blocks/text_&_image_block');

            if( get_row_layout() == 'logo_slider' )
                get_template_part('blocks/logo_slider');

            if( get_row_layout() == 'faqs' )
                get_template_part('blocks/faqs');

            if( get_row_layout() == 'testimonial' )
                get_template_part('blocks/testimonial');

            if( get_row_layout() == 'image' )
                get_template_part('blocks/image');

            if( get_row_layout() == 'vertical_tabs' )
                get_template_part('blocks/vertical_tabs');

            if( get_row_layout() == 'newsletter_signup' )
                get_template_part('blocks/newsletter_signup');

            if( get_row_layout() == 'related_content' )
                get_template_part('blocks/related_content');

            if( get_row_layout() == 'featured_post' )
                get_template_part('blocks/featured_post');

            if( get_row_layout() == 'testimonials_columns' )
                get_template_part('blocks/testimonials_columns');

            if( get_row_layout() == 'content_carousel' )
                get_template_part('blocks/content_carousel');

            if( get_row_layout() == 'team_members' )
                get_template_part('blocks/team-members');

            if( get_row_layout() == 'stats' )
                get_template_part('blocks/stats');

            if( get_row_layout() == 'list_block' )
                get_template_part('blocks/list-block');


            if( get_row_layout() == 'stand-out_quote' )
                get_template_part('blocks/stand-out-quote');


        endwhile; // close the loop of flexible content
    endif; // close flexible content conditional

endwhile; endif; ?>
