<?php
/**
 *
 * The template for displaying posts in the Video post format
 * @since 1.0
 * @version 1.0.0
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php echo cs_post_media( get_the_content() ); ?>

  <header class="entry-header">
    
    <?php if ( !is_single() ){ the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); } ?>
    
    <div class="entry-meta">
      <?php cs_posted_on(); ?>
    </div>

  </header><!-- /entry-header -->

  <div class="entry-content"><?php the_content( __( 'Read More', 'route' ) ); ?></div><!-- /entry-content -->

  <?php do_action( 'cs_post_format_content_after', $post ); ?>

</article><!-- /post-video -->