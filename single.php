<?php get_header(); ?>
	<?php if(is_singular('actividades') || is_singular('selecciones')) { ?>
		<? include(TEMPLATEPATH .'/single-talleres.php'); ?>
	<? } else { ?>
		<? include(TEMPLATEPATH .'/single-general.php'); ?>
	<? } ?>
<?php get_footer(); ?>