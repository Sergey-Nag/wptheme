<footer id="footer">
  <h1>FOOTER</h1>
  <?php 
  if (has_nav_menu('footer-menu')) {
      wp_nav_menu([
          'theme_location' => 'footer-menu'
      ]); 
  }
  ?>
</footer>

</div>
<?php wp_footer();?>
</body>

</html>
