<?php
/**
 *
 * Template Name: Page Left Sidebar
 * @since 1.0.0
 * @version 1.0.0
 *
 */
get_header(); ?>
<section class="main-content md-padding left-layout">

  <div class="container">

    <div class="row">

      <div class="page-sidebar col-md-3">
        <?php get_sidebar(); ?>
      </div>

      <div class="page-content col-md-9">
        <?php
          while ( have_posts() ) : the_post();
            the_content();
          endwhile;
        ?>
      </div>

    </div>

  </div>

</section>
<?php
get_footer();