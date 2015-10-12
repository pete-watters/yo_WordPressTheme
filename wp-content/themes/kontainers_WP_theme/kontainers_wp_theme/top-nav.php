<!--  Top bar with nav -->
<div class="brand_bar"><a class="bclever_logo" href="#"><span>Kontainers</span></a>
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