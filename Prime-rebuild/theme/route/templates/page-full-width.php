<?php
/**
 *
 * Template Name: Full-width, no sidebar
 * @since 1.0.0
 * @version 1.0.0
 *
 */
get_header();
$post_meta    = get_post_meta( $post->ID, '_custom_page_options', true );
if( isset( $post_meta['section'] ) ):
  get_template_part('templates/page', 'section');
else:
?>
<section class="main-content md-padding">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
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
endif;
get_footer();