<?php /* Template Name: Front Page -- No Title */ ?>
<?php get_header(); ?>

<?php if(is_active_sidebar('frontpage-area')): ?>

<?php dynamic_sidebar('frontpage-area'); ?>

<?php else: ?>
        
<?php   if(have_posts()): ?>

<?php   while(have_posts()): the_post(); ?>

<?php   the_content(); ?>

<?php   endwhile; ?>

<?php   else: ?>

<?php get_template_part('content', '404'); ?>

<?php   endif; ?>

<?php endif; ?>

<?php get_footer(); ?>