<?php
//register nav walker class
require_once('wp_bootstrap_navwalker.php');

//theme setup
function wpb_theme_setup() {

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size( 700, 385);
    
    //nav menu
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

//excerpt length control
function set_excerpt_length() {
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

//widgets location
function wpb_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div id="%1$s" class="panel panel-primary">',
        'after_widget' => '</div>',
        'before_title' => '<div class="panel-heading">',
        'after_title' => '</div>'
    ));
}

add_action('widgets_init', 'wpb_init_widgets');

function bs_categories_list_group_filter($variable) {
    $variable = str_replace('<li class="cat-item cat-item-', '<li class="list-group-item cat-item cat-item-', $variable);
    $variable = str_replace('(', '<span class="badge cat-item-count"> ', $variable);
    $variable = str_replace(')', ' </span>', $variable);
    return $variable;
}

add_filter('wp_list_categories', 'bs_categories_list_group_filter');

function wpbeginner_numeric_posts_nav() {

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** 	Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** 	Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<ul class="pagination">' . "\n";

    /** 	Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link());

    /** 	Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** 	Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** 	Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** 	Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul>' . "\n";
}

// Customize Comment Output
function irkom_comment_format($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>

    <div class="media">
        <a class="pull-left" href="#">
            <?php echo get_avatar($comment, 64); ?>
        </a>

        <div class="media-body">
            <h4 class="media-heading"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<?php comment_author_link(); ?>
                <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<small><?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' ago'; ?> &nbsp;<a class="comment-permalink" href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>" title="Comment Permalink"><i class="icon-link"></i></a></small>
            </h4>
            <?php if ($comment->comment_approved == '0') { // Awaiting Moderation  ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em>
            <?php } ?>
            <?php comment_text(); ?>
            <div class="text-right">
                <?php comment_reply_link(array_merge($args, array('reply_text' => __('Reply'), 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
        </div>

    </div>
    <?php
}

function irkom_avatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-circle media-object", $class);
    return $class;
}

add_filter('get_avatar', 'irkom_avatar_class');

// Add Class to Comment Reply Link
function irkom_reply_link_class($class) {
    $class = str_replace("class='comment-reply-link", "class='btn btn-primary btn-sm", $class);
    return $class;
}

add_filter('comment_reply_link', 'irkom_reply_link_class');

// twbs_comment_format  
?>