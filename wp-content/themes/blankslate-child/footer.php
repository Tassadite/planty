</main>
<footer id="footer" role="contentinfo">
<?php wp_footer(); ?>
<?php wp_nav_menu (
          array(
            'theme_location'=> 'footer',
            'container' => false,
            'menu-class'=> 'navbar-nav', 
        )) ?>
</footer>

</body>
</html>
