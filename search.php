    <?php get_header('other'); ?>

    <?php if ( have_posts() ) : ?>
    <header class="is-content-header">
        <h2 >検索結果：<?php echo esc_html( get_search_query()) ?> </h1>
    </header><!-- .page-header -->

    <section class="is-posts-container" >
                <?php
                /*while ( have_posts() ) : 
                    the_post();
                    get_template_part( 'content', 'page' );
                endwhile;*/
            ?>

        <?php
        // Start the loop.
        while ( have_posts() ) :
            the_post();
        ?>

    <?php
    /*
     * Run the loop for the search to output the results.
     * If you want to overload this in a child theme then include a file
     * called content-search.php and that will be used instead.
     */
    get_template_part( 'content', 'page' );

    // End the loop.
    endwhile;

    // If no content, include the "No posts found" template.
    else :
    get_template_part( 'content', 'none' );

    ?>
        </section>
    <?php endif;
            ?>
    <?php get_footer(); ?>