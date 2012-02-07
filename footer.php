
    <?php roots_footer_before(); ?>
    <footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
      <?php roots_footer_inside(); ?>
      <span style="float:right; line-height: 26px;" class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></span>
      <?php dynamic_sidebar('roots-footer'); ?>
    </footer>
    <?php roots_footer_after(); ?>

  </div><!-- /#wrap -->

  <?php wp_footer(); ?>
  <?php roots_footer(); ?>

</body>
</html>