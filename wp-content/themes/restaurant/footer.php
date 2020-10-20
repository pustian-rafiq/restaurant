
<footer>
  <?php
    $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
      'after' => '<span class="separator">|</span>'
    );
  
    wp_nav_menu($args);
  ?>
  <div>
      <p>8293 Mirpur-1200 Dhaka, Bangladesh</p>
      <p>Phone Number: +880 1991166550</p>
  </div>
  <p class="copyright">All rights reserved <?php echo date('Y'); ?></p>
</footer>


<?php wp_footer(); ?>
  </body>
</html>