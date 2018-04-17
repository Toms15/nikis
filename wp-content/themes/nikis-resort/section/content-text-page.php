<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Nikis_Resort_2.0
 */

$column = get_sub_field('numero_colonne');
$structure_one_column = get_sub_field('struttura_una_colonna');
$structure_two_column = get_sub_field('struttura_due_colonne');
?>


<?php if($column == 'one'): ?>
	<?php
	switch ($structure_one_column) {
		case ($structure_one_column == 'text_image'):
		get_template_part( 'section/page/one/content', 'text-image' );
		break;
		case ($structure_one_column == 'image_text'): 
		get_template_part( 'section/page/one/content', 'image-text' ); 
		break;
		case ($structure_one_column == 'only_text'):
		get_template_part( 'section/page/one/content', 'only-text' );  
		break;
	};
	?>
<?php endif; ?>
<?php if($column == 'two'): ?>
	<?php
	switch ($structure_two_column) {
		case ($structure_two_column == 'text_image'):
		get_template_part( 'section/page/two/content', 'text-image' );
		break;
		case ($structure_two_column == 'image_text'): 
		get_template_part( 'section/page/two/content', 'image-text' ); 
		break;
		case ($structure_two_column == 'text_slider'):
		get_template_part( 'section/page/two/content', 'text-slider' );  
		break;
		case ($structure_two_column == 'slider_text'):
		get_template_part( 'section/page/two/content', 'slider-text' );  
		break;
		case ($structure_two_column == 'text_text'):
		get_template_part( 'section/page/two/content', 'text-text' );  
		break;
	};
	?>
<?php endif; ?>