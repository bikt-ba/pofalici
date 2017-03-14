<?php

/*
  Template Name: Page No Title
*/


get_header();  ?>


  <?php

      if (have_posts() ):

          while (have_posts() ): the_post(); ?>

          <div class="jumbotron">
            <h1>Hello, world!</h1>
            <p></p>
          </div>
            <small>Kreirano: <?php the_time('F j, Y'); ?>, u: <?php the_time('g:i a'); ?>, u: <?php the_category(); ?></small>

            <p><?php the_content(); ?></p>

          <?php endwhile;

      endif;

   ?>

<?php  get_footer();  ?>
