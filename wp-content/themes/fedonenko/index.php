

<?php get_header(); ?>
<div class="content-wrapper">
    
	<div class="content-main">
    	
        <div class="content">
        
            <div id='slideshowHolder'>

        	<!-- <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />
            
             <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' />
            
             <img src="<?php bloginfo('template_url');?>/images/img1.jpg" alt='' /> -->


                             
 <?php $slider = new WP_Query(array('post_type'=>'slider','order'=>'ASC')); ?> 
                  <?php if ($slider->have_posts()) : while ($slider->have_posts()) : $slider->the_post(); ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php endwhile; ?>
                  <?php else: ?>
                    <p>Здесь должен быть слайдер</p>
                  <?php endif; ?>

         
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!-- здесь формирование вывода постов, -->
<!-- где работают теги шаблона относящиеся к the loop -->
			
     		<div class="articles">
            	
                <div class="articles-gen-img">
   								<a href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
								<?php else: ?>
                                    <img src="<?php bloginfo('template_url') ?>/images/no_img.jpg" alt="no-image">
                                <?php endif; ?>
                            </a>
                        </div>

                 <div class="articles-head">
                            <span class="articles-date"><img src="<?php bloginfo('template_url'); ?>/images/articles-autor.jpg" alt="admin" /> <span><?php the_author(); ?></span> - <?php the_time('M jS, Y'); ?></span>
                            <span class="articles-comments"><img src="<?php bloginfo('template_url'); ?>/images/articles-comment.jpg" alt="commets" /> <a href="#"><?php comments_popup_link(); ?></a></span>           
                        </div>

                        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        <p><?php the_excerpt(); ?></p>

                        <p><a href="<?php the_permalink(); ?>">Read More</a></p>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            
              <!---
            <div class="articles">

                <div class="articles-gen-img">
                    <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post-img1.jpg" alt="Preview image" /></a>
                </div>
                <div class="articles-head">
                    <span class="articles-date"><img src="<?php bloginfo('template_url'); ?>/images/articles-autor.jpg" alt="admin" /> <span>Admin</span> - Nov 28th, 2010</span>
                    <span class="articles-comments"><img src="<?php bloginfo('template_url'); ?>/images/articles-comment.jpg" alt="commets" /> <a href="#">10 комментариев</a></span>           
                </div>

                <h1><a href="#">Thanksgiving greeting card PSD</a></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum malesuada orci a commodo. Aenean dapibus urna quis nulla consequat sagittis. Quisque ut ultrices massa. Mauris felis felis, rutrum sit amet vehicula ut, tempus quis lectus...</p>

                <p><a href="#">Read More</a></p>

            </div>
            -->                    
          
            
            <div class="pager">     
            <?php posts_nav_link("<span>-</span>"); ?>       	
            <!--
            	<a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>of</span>  
                <a href="#">75</a>  
                <a href="#" class="prev-next">Next</a>
            -->
            </div>
        
        </div>
        
         <?php get_sidebar(); ?>
             
    </div>
      
</div>
<?php get_footer(); ?>
