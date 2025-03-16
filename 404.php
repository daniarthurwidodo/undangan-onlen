<?php
// This is the template for displaying a 404 error page when content is not found.

get_header(); ?>

<div class="error-404 not-found">
    <h1><?php esc_html_e( 'Oops! That page can’t be found.', 'my-custom-theme' ); ?></h1>
    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'my-custom-theme' ); ?></p>
    <?php get_search_form(); ?>
</div>

<?php get_footer(); ?>