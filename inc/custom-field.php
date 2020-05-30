<?php 
/*Meta box para Blog*/ 
add_action( 'cmb2_admin_init', 'edc_campos_blog' );
/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function edc_campos_blog() {

	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cmb_about_page = new_cmb2_box( array(
		'id'           => 'yourprefix_about_metabox',
		'title'        => esc_html__( 'Campos Blog', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( 85 ),
		), // Specific post IDs to display this metabox
	) );

	$cmb_about_page->add_field( array(
		'name' => esc_html__( 'Test Text', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'   => 'yourprefix_about_text',
		'type' => 'text',
	) );

}






