        <div class="well">

<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
  <div class="welL">
    <?php roots_post_inside_before(); ?>
      <div class="page-header">
      	<a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
      </div>
      <?php the_content('<br/>Les mer...'); ?>
      <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
    <?php roots_post_inside_after(); ?>
    </div>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>

</div>