<?php get_header(); ?>

<div class="jumbotron">
    <div class="container">
        <p>Explore arts-based methods to interact with people with Dementia. <a href="#">Read more</a></p>
        <div class="row">
            <div class="col-sm-4">
                <button type="button" id="btn_activities" class="btn btn-primary btn-lg">At home Activities</button>
                <ul id="activity_menu" style="list-style: none">
                    <?php wp_list_categories(array(
                        'show_option_all'    => 'all',
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 0,
                        'use_desc_for_title' => 0,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '1',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => 0,
                        'title_li'           => __( '' ),
                        'show_option_none'   => __( '' ),
                        'number'             => null,
                        'echo'               => 1,
                        'depth'              => 1,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'category',
                        'walker'             => null
                    )); ?>
                </ul>
            </div>

            <div class="col-sm-4">
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='searchresults.html?tag=loc_toronto_activities'">
                    Toronto Activities
                </button>
            </div>

            <div class="col-sm-4">
                <button type="button" class="btn  btn-lg" onclick="window.location.href='submit.html'">
                    Submit content!
                </button>
            </div>
        </div>
    </div>
</div>

<main class="container" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
            <header class="article-header">
                <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <p class="byline entry-meta vcard">
                    <?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                    /* the time the post was published */
                    '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                    /* the author of the post */
                    '<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    ); ?>
                </p>
            </header>

            <section class="entry-content cf">
                <?php the_content(); ?>
            </section>

            <footer class="article-footer cf">
                <?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
                <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
            </footer>
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
            <footer class="article-footer">
                <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
            </footer>
        </article>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
