<?php
        // get URL
        $serverHost = $_SERVER['HTTP_HOST'] ;
        if (fnmatch('*kontainers.co.uk', $serverHost)) {
            // .co.uk domain
            $phone_number = get_post_meta($post->ID, "kontainers_uk_phone", true);
        } else {
            // not .co.uk e.g. us
            $phone_number = get_post_meta($post->ID, "kontainers_us_phone", true);
        }

?>


<!--  Top bar with nav -->
<div class="brand_bar"><a class="bclever_logo" href=""><span>Kontainers</span></a>

    <?php
     if($pagename = "home"){
      ?>
         <!--  Tel Number -->
         <div class="blog-tel"><a target="_blank" title="Call the Kontainers Help Line" href="tel:<?php echo str_replace(' ', '', $phone_number); ?>"><?php echo $phone_number; ?></a></div>
    <?php
     }
    ?>


    <div class="bc_navbar">
        <nav id="menu" class="nav"><a id="nav-toggle" href="#"><span></span></a>
            <ul>
                <?php
                // pass args into wp_nav_menu so we can control content from WP-admin
                $args = array(
                    'theme_location' => 'main-menu'
                );
                ?>
                <?php wp_nav_menu($args); ?>
            </ul>
        </nav>
    </div>
    <a class="bc_button action_goToApp">Get Instant Quotes</a>

</div>