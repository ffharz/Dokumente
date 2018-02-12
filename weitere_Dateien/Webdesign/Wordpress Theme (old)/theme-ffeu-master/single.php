<!-- Header -->
<?php get_header(); ?>
<!-- Header ende -->
    <div id="wide">
        <div class="wrapper">
     <?php if (have_posts()) : while (have_posts()) : the_post(); ?>        
    <h2><?php the_title(); ?></h2>

        </div>
        <div class="clear">
        </div>
    </div>
    <div class="wrapper">
        <div id="content">
            <?php the_content(); ?>
 <?php endwhile; ?>
<?php endif; ?>
        </div>
<!-- Sidebar -->
 <?php get_sidebar(); ?>
<!-- Sidebar ende -->
      <!-- footer -->
      <?php get_footer(); ?>
      <!-- footer ende -->