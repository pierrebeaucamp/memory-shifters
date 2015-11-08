<?php get_header(); ?>
<main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <?php
    the_archive_title( '<span><h1>', '</h1></span>' );
    ?>

    <br>
    <br>

    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="result-item">
                <div class="result-item--thumbnail">
                     <?php the_post_thumbnail('thumbnail');?>
                </div>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'result-item-text' ); ?> role="article">
                    <header>
                        <a class="post-item-text-name" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                    </header>

                    <section class="post-item-text-tagline">
                        <?php the_excerpt(); ?>
                    </section>
                </article>
            </div>
        <?php endwhile; ?>
        <?php bones_page_navi(); ?>
        <?php else : ?>
            <div class="result-item">
                <article id="post-not-found" class="hentry cf">
                    <header class="article-header">
                        <p><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></p>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                </article>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>
