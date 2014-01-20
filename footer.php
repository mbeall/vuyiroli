<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 */
?>

</div><!-- #page -->

<div class="container">
  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php flint_custom_footer(); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div>

<?php get_footer( 'close' );