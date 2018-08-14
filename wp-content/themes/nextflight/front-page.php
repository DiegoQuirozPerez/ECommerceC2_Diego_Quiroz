<?php
/**
 * Front Page Template
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel_Agency
 */

get_header(); 

$home_sections = travel_agency_get_homepage_section();
travel_agency_get_template_part( esc_attr( $home_sections[0] ) );  
do_action( 'travel_agency_after_content' );
get_footer();