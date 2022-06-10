<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-portfolio
 */

?>

	<footer id="colophon" class="site-footer">
        <section class="footer-column">
            <div class="footer-container">
                <h3>Pages</h3>
            <?php
                wp_nav_menu(array(
                    'menu' => 'Nav Menu',
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-menu',
                    'menu_id' => 'footer-id'
                ))
            ?>
            </div><!-- .site-info -->
            <div class="footer-container">
                <h3>Other Stuff</h3>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'theme_location' => 'footer-menu2',
                        'menu_class' => 'footer-menu',
                        'menu_id' => 'footer-id'
                    ))
                ?>
            </div>
            <div class="footer-container">
                <h3>Social Media</h3>
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Nav Menu',
                        'theme_location' => 'footer-menu3',
                        'menu_class' => 'footer-menu',
                        'menu_id' => 'footer-id'
                    ))
                ?>
            </div>
        </section>
        <div class="copyright">
            <p>Made by Miles Marie Angels</p>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
