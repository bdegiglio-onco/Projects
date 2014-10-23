<?php
/**
 *
 * The Template for displaying all single posts.
 * @since 1.0.0
 * @version 1.0.0
 *
 */
get_header();
get_template_part( 'templates/page-header' );

$cs_post_meta    = get_post_meta( $post->ID, '_custom_page_options', true );
$cs_page_layout  = ( isset ( $cs_post_meta['sidebar'] ) ) ? $cs_post_meta['sidebar'] : 'right';
$cs_page_column  = ( $cs_page_layout == 'full' ) ? '12' : '9';

if( $cs_page_layout == 'fluid' ):
  get_template_part('templates/page', 'section');
else:
?>
<section class="main-content md-padding blog-default single-post">
  <div class="container">
    <div class="row">

      <?php cs_page_sidebar( 'left', $cs_page_layout ); ?>
    
      <div class="col-md-<?php echo $cs_page_column; ?>">
        <div class="page-content">
          <?php
            while ( have_posts() ) : the_post();
              
              get_template_part( 'post-formats/content', get_post_format() );

              cs_post_nav();

              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || '0' != get_comments_number() ){
                comments_template( '', true );
              }

            endwhile;
          ?>
        </div>
      </div>

      <?php cs_page_sidebar( 'right', $cs_page_layout ); ?>

    </div>
  </div>
</section>
<?php
endif;
get_footer();