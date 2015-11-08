<?php get_header(); ?>
    <main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                <header>
                    <h1 itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                </header> <?php // end article header ?>

                <section itemprop="articleBody">
                    <?php
                        // the content (pretty self explanatory huh)
                        the_content();
                    ?>
                </section> <?php // end article section ?>
            </article> <?php // end article ?>
        <?php endwhile; endif; ?>
    </main>
<?php get_footer(); ?>
