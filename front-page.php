<?php
// This is the template for the homepage.

get_header(); ?>

<main id="main" class="site-main">
    <section class="home-intro">
        <header class="section-header">
            <h2><?php esc_html_e( 'Welcome to', 'my-custom-theme' ); ?> <?php bloginfo('name'); ?></h2>
        </header><!-- .section-header -->

        <div class="section-content">
            <p><?php esc_html_e( 'This is your homepage. You can edit this content by going to the WordPress admin area and editing the "Front Page" page.', 'my-custom-theme' ); ?></p>
        </div><!-- .section-content -->
    </section><!-- .home-intro -->

    <section class="latest-posts">
        <header class="section-header">
            <h2><?php esc_html_e( 'Latest Posts', 'my-custom-theme' ); ?></h2>
        </header><!-- .section-header -->

        <div class="section-content">
            <?php
            // Query for the latest posts.
            $latest_posts = new WP_Query(array(
                'posts_per_page' => 5,
            ));

            if ($latest_posts->have_posts()) :
                while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p><?php esc_html_e( 'No posts found.', 'my-custom-theme' ); ?></p>
            <?php endif; ?>
        </div><!-- .section-content -->
    </section><!-- .latest-posts -->
</main><!-- #main -->

<?php
get_footer();