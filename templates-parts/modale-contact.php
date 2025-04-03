<?php
// Récupération de l'image choisie par l'utilisateur dans le customizer
$image_url = get_theme_mod('contact_popup_image');
?>

<div class="contact-popup-overlay">
    <div class="contact-popup">
        <!-- Image en haut -->
        <div class="popup-header">
            <?php if ($image_url) : ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="Image de contact" class="contact-popup-img">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ContactHeaderDesktop.svg" alt="Image de contact par défaut" class="contact-popup-img">
            <?php endif; ?>
            <span class="popup-close">&times;</span>
        </div>

        <!-- Formulaire de contact -->
        <div class="popup-body">
            <?php echo do_shortcode('[contact-form-7 id="c11f1d3" title="Formulaire de contact"]'); ?>
        </div>
    </div>
</div>
