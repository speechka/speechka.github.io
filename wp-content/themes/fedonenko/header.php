<?php
/*echo 'Я усердно изучаю WP на факультете МКиМТ';*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title> <?php bloginfo('name'); wp_title(); ?> </title>
<?php wp_head(); ?>
</head>

<body>
<div class="head-wrapper">
    <div class="head">
        <div class="head-logo">
            <a href="/">
            <img src="<?php bloginfo('template_url');?>/images/logo.jpg" alt="" />
            </a>
        </div>
       <div class="head-banner">
                  <!--  <img src="<?php bloginfo('template_url'); ?>/images/728x90.jpg" alt="" />-->
                  <?php $banner = new WP_Query(array('post_type'=>'banner','posts_per_page'=>1)); ?> 
                  <?php if ($banner->have_posts()) : while ($banner->have_posts()) : $banner->the_post(); ?>
                    <?php the_post_thumbnail('full'); ?>
                  <?php endwhile; ?>
                  <?php else: ?>
                    <p>Здесь должен быть баннер 728*90</p>
                  <?php endif; ?>
                </div>
            </div>
        </div>
<div class="menu-wrapper">
    <div class="menu-main">
        <?php if (!dynamic_sidebar('menu_header')): ?>
        <?php endif;?>
        <!--
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="#">Design Services</a></li>
            <li><a href="#">Request Quote</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Contact Me</a></li>
        </ul>-->
     


        <!-- <ul class="ico-social">
            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/ico-vk.png" alt="мы вконтакте" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/ico-youtobe.png" alt="канал youtobe" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/ico-facebook.png" alt="мы на facebook" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url');?>/images/ico-twitter.png" alt="наш twitter" /></a></li>
        </ul>-->
            </div>
</div>