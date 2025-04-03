<?php
/**
 * Le template du pied de page
 */
?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <?php
        if (has_nav_menu('footer-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'menu_class'     => 'footer-menu',
                'container'      => 'ul',
                'fallback_cb'    => false,
            ));
        }
        ?>
        <p class="copyright">Tous droits réservés</p>
    </div>
</footer>

<?php wp_footer(); ?>


<?php
/**
 * Lien pour appeler la modale de contact
 */
?>

<?php get_template_part('templates-parts/modale-contact'); ?>


</body>
</html>
