<!-- Header -->
<?php get_header(); ?>
<!-- Header ende -->
    <div id="wide">
        <div class="wrapper">
 <?php // if (have_posts()) : while (have_posts()) : the_post(); ?>        
    <h2><?php the_title(); ?></h2>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="wrapper">
        <div id="content">
            
               <?php if (have_posts()) : while (have_posts()) : the_post(); ?>       
            <?php the_content(); ?>
       
      <?php endwhile; endif; ?>
 
      <?php
         /*
          * Kommentare sind auf Seiten deaktiviert.
          * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
          */
 
         //comments_template();
      ?>

        </div>
        <?php get_sidebar(); ?>
        <div class="clear">
        </div>
       <?php get_footer(); ?>
