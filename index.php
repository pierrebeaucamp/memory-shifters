<?php get_header(); ?>

<div id="content">
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Explore arts-based methods to interact with people with Dementia.</p>
                <p>Further info...</p>
                </div>

                <div class="col-md-6">
                <button type="button" class="btn btn-primary btn-lg" onclick="window.location.href='/category/toronto/'">
                                        <span class="glyphicon glyphicon-map-marker"></span> Toronto Activities
                                    </button>

                <button type="button" id="btn_activities" class="btn btn-primary btn-lg">
                                        <span class="glyphicon glyphicon-home"></span> At home Activities
                                    </button>

                                    <ul id="activity_menu" style="list-style: none">
                                                            <?php wp_list_categories(array(
                                                                'show_option_all'    => '',
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
                                                                'exclude'            => '1,9',
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
                                                            <li class="cat-item-all">
                                                                <a href="/">all</a>
                                                            </li>
                                                        </ul>

                        </div>
                </div>


                    <button type="button" class="btn  btn-lg" onclick="window.location.href='submit.html'">
                        Submit content!
                    </button>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
