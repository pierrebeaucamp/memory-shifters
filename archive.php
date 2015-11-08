<?php get_header(); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <?php
    the_archive_title( '<span><h1>', '</h1></span>' );
    ?>

    <br>
    <br>

    <div class="row">
        <div class="result-item">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'result-item-text' ); ?> role="article">
                    <header>
                        <a class="post-item-text-name" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </header>

                    <section class="post-item-text-tagline">
                        <?php the_excerpt(); ?>
                    </section>
                </article>
            <?php endwhile; ?>
            <?php bones_page_navi(); ?>
            <?php else : ?>
                <article id="post-not-found" class="hentry cf">
                    <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                </article>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
