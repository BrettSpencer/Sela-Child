<?php
/**
 * The template for displaying the footer.
 *
 * @package Sela
 */
?>

	</div><!-- #content -->

	<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
		<?php if ( has_nav_menu ( 'social' ) ) : ?>
			<?php wp_nav_menu( array( 'theme_location' => 'social', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'container_class' => 'social-links', ) ); ?>
		<?php endif; ?>
        
<div id="footer-btn">
    <div class="btn-color">
        <a href="https://instagram.com/robin_eastwicksalon/"><i class="fa-2x fa fa-instagram"></i></a>
        <a href="https://www.facebook.com/rnsalas79"><i class="fa-2x fa fa-facebook-square"></i></a>
        <a href="http://www.yelp.com/biz/robin-salas-seattle"><i class="fa-2x fa fa-yelp"></i></a>
    </div><!-- end btn-color -->
</div><!-- end footer-btn -->
        
		<div class="site-info"  role="contentinfo">
			<a href="https://darkmassdesign.com/">Designed by Dark Mass Design</a>
			<span class="sep"> | </span>
			&copy; <?=date(Y); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
