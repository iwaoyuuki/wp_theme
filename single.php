    <!-- Get header -->
    <?php get_header('other'); ?>

    <article class="single">
        <!-- header -->
        <header class="single-header is-content-header">
                <h2 class="single-title  Accent-C"><?php single_post_title(); ?></h2>
        </header>

        <div class="row">
        <div class="col-12 content-box">
        <!-- posts -->
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
        ?>
            <section class="page">
            <?php the_content() ?>
            </section>
        </div>
        <div class="col-12 comment-box">

        <?php
        			if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
        ?>
        </div>
        </div>
        <?php endwhile;?>
    </article>
    <?php get_footer(); ?>