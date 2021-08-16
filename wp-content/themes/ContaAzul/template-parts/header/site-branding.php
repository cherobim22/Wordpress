<?php


?>

<?php if ( has_custom_logo()) : ?>
	<div class="site-logo"><img class="footer-svg" src="<?php  echo get_template_directory_uri() . '/template-parts/header/imgs/logo_branca.png'?>" alt=""></div>
<?php endif; ?>
<style>
	#masthead{
	font-family: 'Montserrat', sans-serif;
	height: 600px;
	display: flex;
	align-items: center;
	justify-content: center;
	background-size: 100%;
	background-image: url(" <?php  echo get_template_directory_uri(). '/template-parts/header/imgs/hero.jpg' ?>");
	}
</style>

