<?php
/**
 * Template Name: Custom Template
 * Description: A custom page template for special layout.
 */

function add_custom_meta_tags() {
    if (is_page_template('template-custom.php')) {
        echo '<meta name="description" content="This is a custom page template.">';
        echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/custom-style.css">';
    }
}
add_action('wp_head', 'add_custom_meta_tags');

get_header(); ?>

<main id="main" class="site-main">
    <section class="custom-template-section">
        <header class="section-header">
            <h2><?php esc_html_e( 'Custom Template', 'my-custom-theme' ); ?></h2>
        </header><!-- .section-header -->

        <div class="section-content">
            <p><?php esc_html_e( 'This is a custom page template.', 'my-custom-theme' ); ?></p>
        </div><!-- .section-content -->
    </section><!-- .custom-template-section -->
</main><!-- #main -->

<?php
get_footer();