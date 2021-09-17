<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenwich
 */

if ( ! is_active_sidebar( 'language-mob' ) ) {
    return;
}
?>

<?php dynamic_sidebar( 'language-mob2' ); ?>
