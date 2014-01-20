<?php
/**
 * The template for displaying Archive pages
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 */

get_header(); ?>

  <section id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">

    <?php global $query_string;
          query_posts( $query_string . '&orderby=rand&posts_per_page=99' );
          if ( have_posts() ) : ?>

      <header class="page-header">
        <h1 class="page-title">
          <?php printf( __( '%s', 'flint' ), '<span>' . single_term_title( '', false ) . '</span>' ); ?>
        </h1>
      </header><!-- .page-header -->

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', get_post_type() ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div><!-- #content -->
  </section><!-- #primary -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>