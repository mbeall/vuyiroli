<?php
/**
 * The main template file used to display a page when nothing more specific matches a query.
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <?php if ( have_posts() ) : ?>

      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          $type = get_post_type();
          if ($type == 'post') :
            get_template_part( 'format', get_post_format() );
          else :
            get_template_part( 'type', $type );
          endif;
        ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'index' ); ?>

    <?php endif; ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>
