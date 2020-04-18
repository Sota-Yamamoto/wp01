    <!-- フッターエリア -->
    <footer>
      <?php
        $param = array(
            'container'      => 'nav',
            'container_id'   => 'fNav',
            'theme_location' => 'footer_nav',
         );
        wp_nav_menu($param);
      ?>

      <small id="copyright">Copyright (c) 2016 Sample Marketing.inc. All Rights Reserved.</small>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
