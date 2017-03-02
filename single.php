<?php get_header(); ?>

<div class="container">
    <div class="blog-header">
        <h1 class="blog-title"> <?php the_title(); ?></h1>
        <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>
    <div id="stories" class="">
        <div class="row ">
            <div class="col-md-9 ">
                <div class="section-reading">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php __('No Page Found'); ?></p>
                <?php endif; ?>
                </div>
               
                <div class="text-left">
                    <?php comments_template(); ?>
                </div>
            </div>
            <div class="col-md-3">
                <?php
                //for use in the loop, list 5 post titles related to first tag on current post
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $first_tag = $tags[0]->term_id;
                    $args = array(
                        'tag__in' => array($first_tag),
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 5,
                        'caller_get_posts' => 1
                    );
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        ?>
                        Related Posts
                        <ul class="list-group">
                            <?php
                            while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                <li class="list-group-item"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                                    <?php
                                endwhile;
                            }
                            wp_reset_query();
                        }
                        ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
