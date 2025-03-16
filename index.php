<?php
// This is the main template file for the theme. It serves as a fallback for all other templates.

get_header(); ?>

<main id="main" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'my-custom-theme' ); ?></h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
                <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'my-custom-theme' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
            <?php else : ?>
                <p><?php esc_html_e( 'It seems we can’t find what you’re looking for. Perhaps searching can help.', 'my-custom-theme' ); ?></p>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #main -->

<?php
get_footer();