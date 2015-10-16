<!--  widget_recent_entries - scraped from standard WP recent entries -->
<aside id="recent-posts-2" class="widget widget_recent_entries">

    <h2 class="widget-title">Recent Posts</h2>
    <ul>
        <?php
        $args = array(
            'numberposts' => 10,
            'category' => 'blog',
            'orderby' => 'post_date',
            'order' => 'DESC',);
        $recent_posts = wp_get_recent_posts($args);
        foreach( $recent_posts as $recent ){
            echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
        }
        ?>
    </ul>
</aside>
<!--  /widget_recent_entries-->