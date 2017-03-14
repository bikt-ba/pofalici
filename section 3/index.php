<?php  get_header();  ?>


  <?php

      if (have_posts() ):

          while (have_posts() ): the_post(); ?>

            <h3><?php the_title(); ?></h3>
            <small>Kreirano: <?php the_time('F j, Y'); ?>, u: <?php the_time('g:i a'); ?>, u: <?php the_category(); ?></small>

            <p><?php the_content(); ?></p>

          <?php endwhile;

      endif;

   ?>

<?php  get_footer();  ?>
