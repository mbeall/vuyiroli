<?php
/**
 * The main template file used to display a page when nothing more specific matches a query.
 *
 * @package Flint\Vuyiroli
 * @since 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'format', get_post_format() ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'index' ); ?>

    <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>
