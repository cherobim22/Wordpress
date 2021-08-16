<?php
?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
	<link rel="stylesheet" href="<?php  echo get_template_directory_uri() . '/template-parts/footer/css/index.css'?>" type="text/css" media="screen" />
		<div class="site-logo-footer"><img src="<?php  echo get_template_directory_uri() . '/assets/images/logoAzul.png'?>" alt=""></div>
	
		<span>&copy; 2021 Direitors reservados - <a>Termos de uso</a> - <a>Politica de privacidade</a></span>
		<div class="navegation-footer">
			<ul class="footer-navigation-wrapper ">
				<li><a href="https://www.facebook.com/ContaAzul" target="_BLANCK"><img class="footer-svg" src="<?php  echo get_template_directory_uri() . '/template-parts/footer/imgs/menu/facebook.svg'?>" alt=""></a></li>
				<li><a href="https://twitter.com/contaazul" target="_BLANCK"><img class="footer-svg" src="<?php  echo get_template_directory_uri() . '/template-parts/footer/imgs/menu/twitter.svg'?>" alt=""></a></li>
				<li><a href="https://www.linkedin.com/company/contaazul/" target="_BLANCK"><img class="footer-svg" src="<?php  echo get_template_directory_uri() . '/template-parts/footer/imgs/menu/linkedin.svg'?>" alt=""></a></li>
				<li><a href="https://www.youtube.com/user/ContaAzulTV" target="_BLANCK"><img class="footer-svg" src="<?php  echo get_template_directory_uri() . '/template-parts/footer/imgs/menu/youtube.svg'?>" alt=""></a></li>
			</ul>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
