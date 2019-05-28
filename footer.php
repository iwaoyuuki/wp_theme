            </div> <!-- col-9 -->
            <div class="l-sidebar col-12 col-md-3 Point-C">
                <?php get_sidebar() ?>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <footer class="l-footer l-f-font Accent-C">
        <span>
        Copyright © 2017 user_name All Rights Reserved.
        </span>
    <?php if ( is_active_sidebar( 'footer-left-widget' ) ) : ?>
        <div class="footer-widget">
            <?php dynamic_sidebar( 'footer-left-widget' ); ?>
        </div>
    <?php endif; ?>
    </footer>
    <?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>

</html>
    