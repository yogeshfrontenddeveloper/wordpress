<?php get_header(); ?>

<h2><?php bloginfo('name'); ?></h2>

<?php 
while (have_posts()){
    the_post(); ?>
    <h2><?php the_title(); ?> </h2>
    <?php the_content(); ?> 
<?php }

?>

<?php get_footer(); ?>