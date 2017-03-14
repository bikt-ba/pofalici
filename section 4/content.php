

<h3><?php the_title(); ?></h3>

<div class="thumbnails-img">
<?php the_post_thumbnail('full'); ?>
</div>

<small>Kreirano: <?php the_time('F j, Y'); ?>, u: <?php the_time('g:i a'); ?>, u: <?php the_category(); ?></small>

<p><?php the_content(); ?></p>
