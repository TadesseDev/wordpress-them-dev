</div>
<?php wp_footer();  ?>
<footer>
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'footer-menu',
                'container_class' => 'menuContainer',
                'menu_id' => 'footerMenu',
                'depth' => 1,
                'fallback_cb' => false,
            )
        );
    ?>
</footer>
</body>
</html>