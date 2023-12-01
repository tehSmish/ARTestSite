

    <footer class="footer is-flex">
        <?php wp_footer(); ?>
        <div class="footer-top is-flex">
            <div class="site-logo"><img src="<?php echo wp_get_attachment_image_url(18, $size = 'full', $icon = 'false'); ?>"> </div>
            <div class="footer-menus is-flexs">
                <div class="footer-menu">
                    <h3>Product</h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer menu 1')); ?>
                </div>
                <div class="footer-menu">
                    <h3>Product</h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer menu 3')); ?>
                </div>
                <div class="footer-menu">
                    <h3>Solutions</h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer menu 2')); ?>
                </div>
                <div class="footer-menu">
                    <h3>Product</h3>
                    <?php wp_nav_menu(array('theme_location' => 'footer menu 4')); ?>
                </div>
            </div>
        </div>
        <div class="footer-base is-flex">
            <div class="product-line is-flex">
                <h3>Product</h3>
                <h3>Product</h3>
                <h3>Product</h3>
                <h3>Product</h3>
                <h3>Product</h3>
                <h3>Product</h3>
            </div>
            <div class="Socals is-flex">
                <div class="soc-logo"><img src="<?php echo wp_get_attachment_image_url(172, $size = 'full', $icon = 'false'); ?>"> </div>
                <div class="soc-logo"><img src="<?php echo wp_get_attachment_image_url(171, $size = 'full', $icon = 'false'); ?>"> </div>
                <div class="soc-logo"><img src="<?php echo wp_get_attachment_image_url(170, $size = 'full', $icon = 'false'); ?>"> </div>
            </div>
        </div>
    </footer>





    </body>
</html>