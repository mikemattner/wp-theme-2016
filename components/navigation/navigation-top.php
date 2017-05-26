    <nav role="navigation" id="site-navigation">
        <ul>
            <?php 
                $args = array(
                        'theme_location'  => 'primary_menu', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => '', 
                        'menu_id'         => '',
                        'items_wrap'      => '%3$s');
                wp_nav_menu($args);
            ?>
        </ul>
    </nav>