<?php
/**
 *
 * The template for displaying search posts.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
get_header(); ?>
<section id="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 md-padding">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'route' ), get_search_query() ); ?></h1>
        <?php echo cs_breadcrumb(); ?>
      </div>
    </div>
  </div>
</section><!-- /page-header -->

<section class="main-content md-padding blog-default">
  <div class="container">
    <div class="row">

      <div class="col-md-9">
        <?php
          if ( have_posts() ) :

            // loop posts
            while ( have_posts() ) : the_post();
              get_template_part( 'post-formats/content', get_post_format() );
            endwhile;

            // pagination
            cs_paging_nav( array( 'nav' => 'archive' ) );

          else :

            // If no content, include the "No posts found" template.
            get_template_part( 'post-formats/content', 'none' );

          endif;
        ?>
      </div>

      <?php cs_page_sidebar(); ?>

    </div>
  </div>
</section><!-- /section -->
<?php
get_footer();