<!--  Top bar with nav -->
<div class="brand_bar"><a class="bclever_logo" href=""><span>Kontainers</span></a>
    <?php
    // then if it's GB
    if (fnmatch('*locale=gb', $_SERVER['REQUEST_URI'])) {
        // uk passed
        $localeSetting = 'gb';
        $phoneNumber = get_post_meta(20, "kontainers_uk_phone", true);
        $contactEmail = get_post_meta(20, "kontainers_uk_email", true);
    }else{
        // us passed
        $localeSetting = 'us';
        $phoneNumber = get_post_meta(20, "kontainers_us_phone", true);
        $contactEmail = get_post_meta(20, "kontainers_us_email", true);
    }
    ?>


    <?php
    if(is_front_page()){
        ?>
        <!--  Tel Number -->
        <div class="blog-tel"><a target="_blank" title="Call the Kontainers Help Line" href="tel:<?php echo str_replace(' ', '', $phoneNumber); ?>">
                <?php echo $phoneNumber; ?>
            </a></div>
        <?php
    }
    ?>


    <div class="bc_navbar">
        <nav id="menu" class="nav"><a id="nav-toggle" href="#"><span></span></a>
            <?php
            // pass args into wp_nav_menu so we can control content from WP-admin
            $args = array(
                'theme_location' => 'main-menu'
            );
            ?>
            <?php wp_nav_menu($args); ?>
        </nav>
    </div>
    <a class="bc_button action_goToApp">
        Get Instant Quotes</a>

</div>