<?php
?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<link rel="stylesheet" href="<?php  echo get_template_directory_uri() . '/template-parts/footer/css/index.css'?>" type="text/css" media="screen" />
		<div class="site-logo-footer"><img src="<?php  echo get_template_directory_uri() . '/assets/images/logoAzul.png'?>" alt=""></div>
	
		<span>&copy; 2016 Direitors reservados - <a>Termos de uso</a> - <a>Politica de privacidade</a></span>
		
		
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
				<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span>',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
<style>
	#colophon{
	/* border: 1px solid red; */
	width: 96%;
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 20px;
}

#colophon > span > a{
	color: #2687e9;
}

.site-logo{
	display: flex;
	align-items: center;
}

.footer-navigation{
	display: flex;
}

ul.footer-navigation-wrapper {
    display: flex;
    justify-content: space-around;
    /* border: 1px solid red; */
    width: 191px;
    list-style-type: none;
	/* margin-right: 10%; */
}

svg.svg-icon {
    fill: #2687e9;
}

.site-footer span{
	margin-left: 50px;
}


@media (min-width: 300px) and (max-width: 640px) {
	#colophon{
		/* border: 1px solid red; */
		display: flex;
		flex-direction: column;
		margin: 0 auto ;
		padding: 0px;
	}
	.site-footer span{
		margin-left: 0px;
		margin-top: 15px;
		text-align: center;
		font-size: 14px;
		/* width: 90%; */
		padding: 5px;

	}
	ul.footer-navigation-wrapper {
		margin-top: 20px;
		display: flex;
		justify-content: space-around;
		list-style-type: none;
		margin-right: 15%;

	}
}

/* @media (max-width: 395px)
{
	.site-footer span{
			border: 1px solid red;

	}
} */
</style>
</html>
