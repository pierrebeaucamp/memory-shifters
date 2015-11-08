<?php get_header(); ?>
    <main class="container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                <header>
                    <h1 itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                    <img src="/wp-content/themes/memory-shifters/library/images/5star_blk_lg.jpg" width="150px;" align="right" style="opacity: 0.6" />
                    <?php if (get_field('url')) : ?>
                        <div>
                            <strong>URL: </strong><a href="<?php the_field('url'); ?>"><?php the_field('url'); ?></a>
                        </div>
                    <?php endif; if (get_field('date')) : ?>
                        <div>
                            <strong>Date: </strong><a href="<?php the_field('date'); ?>"><?php the_field('date'); ?></a>
                        </div>
                    <?php endif; ?>
                    <strong>Description: </strong>
                </header> <?php // end article header ?>

                <section itemprop="articleBody">
                    <?php
                        // the content (pretty self explanatory huh)
                        the_content();
                    ?>
                </section> <?php // end article section ?>
              </article> <?php // end article ?> 
        <?php endwhile; ?>
        <?php else : ?>
            <article class="row">
                    <header>
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                    <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
            </article>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>
