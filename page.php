<?php get_header('other'); ?>
        <?php
            // Start the loop.
            while ( have_posts() ) : the_post();
            ?>
        <section class="page">
            <header class="page-header is-content-header">
                <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
            </header>
            <div class="post-thumbnail">
                        <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail(array(),array('class' => "post-thumbnail-img",));
                    }
                    /*else {
                        echo '<img class="post-thumbnail-img" src="' . get_bloginfo( 'stylesheet_directory' ) . '/images/thumbnail-default.png"/>';
                    }*/
                    ?>
            <article class="page-content row">
                <?php the_content() ?>
            </article>
            
        </section>
        <?php endwhile?>
<?php get_footer( ); ?>