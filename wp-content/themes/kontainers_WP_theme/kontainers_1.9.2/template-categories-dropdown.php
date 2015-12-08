<!--  widget_categories - scraped from standard WP categories -->
<aside id="categories-2" class="widget widget_categories">

    <h2 class="widget-title">Categories</h2>
    <ul>
        <?php
        $args = array(
            'orderby' => 'name',
            'order' => 'ASC',);
        $categories = get_categories( $args );

        foreach( $categories as $category ){
            echo '<li><a class="cat-item" href="' . get_category_link( $category->term_id ) . '">' .   $category->name .'</a> </li> ';
        }
        ?>
    </ul>
</aside>
<!--  /widget_categories - scraped from standard WP categories -->