<?php get_header(); ?>
<main id="main" class="container" role="main">
    <h1 class="archive-title"><span>Results for </span>"<?php echo esc_attr(get_search_query()); ?>"</h1>

    <br>
    <br>

    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="result-item">
                <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
                    <header>
                        <a class="post-item-text-name" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </header>

                    <section>
                        <?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>
                    </section>
                </article>
            </div>
        <?php endwhile; ?>
        <?php bones_page_navi(); ?>
        <?php else : ?>
            <div class="result-item">
                <article id="post-not-found" class="hentry cf">
                    <header class="article-header">
                        <p><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></p>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
                    </section>
                </article>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
