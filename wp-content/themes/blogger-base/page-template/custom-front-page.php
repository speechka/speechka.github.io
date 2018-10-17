<?php
/**
 * Template Name: Custom home page
 */

get_header(); ?>

<div id="main-post" class="container">
  <div class="col-md-9">
    <div id="category_post">
      <?php if( get_theme_mod('blogger_hub_section_title') != ''){ ?>
        <h2><?php echo esc_html(get_theme_mod('blogger_hub_section_title',__('Recent Post','blogger-base'))); ?></h2>
      <?php }?>
      <?php 
        $page_query = new WP_Query(array( 'category_name' => get_theme_mod('blogger_hub_our_category','theblog')));?>
        <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
          <div class="col-md-4 col-sm-4">
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
            <div class="navigation">
                <?php
                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => __( 'Previous page', 'blogger-base' ),
                        'next_text'          => __( 'Next page', 'blogger-base' ),
                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'blogger-base' ) . ' </span>',
                    ) );
                ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <?php endwhile; 
          wp_reset_postdata();
      ?>
    </div>
    <div class="clearfix"></div>
    <div id="wrapper">
      <div class="feature-box">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>
      </div>
    </div>
  </div>
  <div id="sidebar" class="col-md-3">
    <?php dynamic_sidebar('home-page'); ?>
  </div>
</div>

<?php get_footer(); ?>