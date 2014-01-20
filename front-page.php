<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint
 * @sub-package Vuyiroli
 * @since 0.1
 *
 */

get_header(); ?>

  <div id="primary" class="content-area container">
    <div id="content" class="site-content" role="main">
  
      <?php while ( have_posts() ) : the_post(); ?>

<div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
            <p>Vuyiroli (a Tamil word for 'Light of Life') Welfare Society is a well reputed Christian, Non-Profit and registered organization in service to the elderly destitute established in the year 1999. We have been serving many dying elderly destitute since then. We are very well recognized by the public, Churches and Government Departments. This charitable organization serves the poor and dying destitute irrespective of caste, creed, religion and language.</p>
            <p>We invite you to know and join us in this venture of caring, catalyzing, empowering and advocating.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="alert alert-success">
            <p><strong>As a white Candle in a Holy Place, so is the Beauty of an aged face.</strong></p>
            <p style="text-align:right;">Joseph Campbell</p>
</div>
            <a class="btn btn-default btn-block" href="http://fortcollinscreative.com/vws/about-us/mission-and-vision/">Mission and Vision</a>
            <a class="btn btn-default btn-block" href="http://fortcollinscreative.com/vws/about-us/statement-of-faith/">Statement of Faith</a>
          </div>
        </div><!-- .row -->
        
        <hr />
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4>Why Street Elders?</h4>
            <p>Rapid urbanization…leads people to be individualistic… results in reducing the concept of family to a nuclear family, pushing the old out to the streets as an uncared, most neglected vulnerable people group in the city.</p>
            <a href="http://fortcollinscreative.com/vws/why-street-elders" class="btn btn-default btn-sm">Read more</a>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4>Shelter Project</h4>
            <p>"Let there not be any one left out on the street uncared and dying without shelter." Here is the opportunity for you to partake in the venture</p>
            <a href="http://fortcollinscreative.com/vws/first-floor-extension" class="btn btn-default btn-sm">Read more</a>
          </div>
        </div><!-- .row -->

      <?php endwhile; ?>
      
      <?php flint_content_nav( 'nav-below' ); ?>
  
    </div><!-- #content .site-content -->
  </div><!-- #primary .content-area -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>