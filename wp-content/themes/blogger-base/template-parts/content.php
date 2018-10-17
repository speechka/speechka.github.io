<?php
/**
 * The template part for displaying services
 * @package Blogger Base
 * @subpackage blogger_base
 * @since 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="blog-sec">
    <div class="mainimage">
      <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
      ?>
    </div>
    <h3><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?></a></h3>
    <hr class="post-hr">              
    <p><?php $excerpt = get_the_excerpt(); echo esc_html( blogger_base_string_limit_words( $excerpt,15 ) ); ?>
    <div class="blogbtn">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small hvr-sweep-to-right" title="<?php esc_attr_e( 'Read Full', 'blogger-base' ); ?>"><?php esc_html_e('Read Full','blogger-base'); ?></a>
    </div>
    <p class="post_tag"><?php
      if( $tags = get_the_tags() ) {
        echo '<span class="meta-sep"></span>';
        foreach( $tags as $tag ) {
          $sep = ( $tag === end( $tags ) ) ? '' : ' ';
          echo '<a href="' . esc_url(get_term_link( $tag, $tag->taxonomy )) . '">#' . esc_html($tag->name) . '</a>' . esc_html($sep);
      } }?>
    </p>
  </div>
</div>