<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?>" role="banner">
	<!-- <img src="./wp-content/themes/novo/template-parts/header/imgs/hero.jpg" width="100" alt="a"> -->
	<div class="teste">
		<?php get_template_part( 'template-parts/header/site-branding' ); ?>
		<span>Um evento que vai marcar o mercado. <br> Seja o primeiro a saber de tudo.</span>
		<small>Para contadores de olho no futuro, a ContaAzul realiza um evento nacional. <br> sobre as oportunidades e tendencias do mercado contábil.</small>

		<div class="form">
			<input type="text" placeholder="Nome">
			<input type="text" placeholder="E-mail">
			<button>Me avise</button>
		</div>
	</div>

</header><!-- #masthead -->
<style>
	@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');
	
	#masthead{
		/* border: 1px solid red; */
		font-family: 'Montserrat', sans-serif;
		height: 500px;
		display: flex;
		align-items: center;
		justify-content: center;
		background-image: url("http://localhost/wordpress/wordpress/wp-content/themes/novo/template-parts/header/imgs/hero.jpg");
	}
	.teste{
		display: flex;
		flex-direction: column;
		/* justify-content: center; */
		align-items: center;
		height: 500px;
	}
	 .form{
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		/* margin-top: 2%; */
		/* border: 1px solid red; */
		width: 80%;
		height: 200px;
		
	}
	.teste span, .teste small{
		color: white;
		text-align: center;
	}

	.teste span{
		font-size: 24px;
		margin-top: 5%;
	}
	.teste small{
		font-size: 16px;
		margin-top: 5%;
	}

	.form input{
		width: 80%;
		height: 25px;
		margin-top: 15px;
		border-radius: 5px;
		padding: 10px;
	}

	.form button{
		margin-top: 15px;
		height: 30px;
		width: 120px;
		background-color: #46BB51;
		color: white;
		border: none;
		border-radius: 5px;
		cursor: pointer;
	}

</style>
