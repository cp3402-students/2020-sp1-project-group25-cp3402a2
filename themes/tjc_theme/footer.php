<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tjc_theme
 */

?>

    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Site for the Townsville Jazz Club, by group 25'));
            ?>
            <span class="sep"> | </span>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

<?php wp_footer(); ?>