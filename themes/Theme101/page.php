<?php get_header(); ?>

<?php 
while (have_posts()){
    the_post(); ?>
      <header>
         <div class="jumbotron text-left">  
      <h1>TeachSub is an IT enabled Educational Company that provides simple, powerful solutions to the school management by providing Quality Teachers even for a day…
         </h1>
          </div>
          </header>
          <div class="container"> <h2><?php the_title(); ?> </h2></div>
   
    <?php the_content(); ?>

<?php }

?>

<?php get_footer(); ?>