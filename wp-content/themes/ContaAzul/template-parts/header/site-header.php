<?php


?>

<header id="masthead" class="" role="banner">
	<link rel="stylesheet" href="<?php  echo get_template_directory_uri() . '/template-parts/header/css/index.css'?>" type="text/css" media="screen" />
	<?php get_template_part( 'template-parts/header/header-form' ); ?>
	<?php get_template_part( 'template-parts/header/header-thankyou' ); ?>
</header>
<script>
	document.getElementById('form-lead').addEventListener('submit', (e) => {
		e.preventDefault();
		document.getElementById('')
		document.getElementById('')
		document.querySelector('.form-submit').classList.replace('flex', 'none');
		document.querySelector('.thankyou').classList.replace('none', 'flex');
		
	})

	document.getElementById('submit-facebook').addEventListener('click', () => {
		console.log('click');
		document.querySelector('.thankyou').classList.replace('flex', 'none');
		document.querySelector('.form-submit').classList.replace('none', 'flex');
	})
	
</script>
