</div>
<footer id="footer">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'monospaceWP' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function() { jQuery("#menuLinkID").click(function() { jQuery(".top-nav-class").toggle(); }); });
</script>
</body>
</html>