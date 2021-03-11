
<?php



/**
 * Hook in and add a metabox that only appears on the 'About' page
 */
function  cas_campos_homepage(){
   $prefix = 'cas_homepage_';

   $id_home = get_option( 'page_on_front' );
	/**
	 * Metabox to be displayed on a single page ID
	 */
	$cas_campos_homepage = new_cmb2_box( array(
		'id'           => $prefix .'homepage',
		'title'        => esc_html__( 'Campos Homepage', 'cmb2' ),
		'object_types' => array( 'page' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => true, // Show field names on the left
		'show_on'      => array(
			'id' => array( $id_home),
		), // Specific post IDs to display this metabox
	) );
	
	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( ' Imagen 1 del Carrusel ', 'cmb2' ),
		'desc' => esc_html__( 'agregue una imagen ', 'cmb2' ),
		'id'      => $prefix . 'carrusel-img1',
		'type' => 'file',
    ) );	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen 2 del Carrusel', 'cmb2' ),
		'desc' => esc_html__( 'agregue una imagen ', 'cmb2' ),
		'id'      => $prefix . 'carrusel-img2',
		'type' => 'file',
    ) );	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen 3 del Carrusel', 'cmb2' ),
		'desc' => esc_html__( 'agregue una imagen ', 'cmb2' ),
		'id'      => $prefix . 'carrusel-img3',
		'type' => 'file',
    ) );

	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Texto 1 de Empresa', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => $prefix . 'text-empresa1',
		'type' => 'textarea',
	) );

	
	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Texto 2 de Empresa', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => $prefix . 'text-empresa2',
		'type' => 'textarea',
	) );
	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Texto 1 de producion', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => $prefix . 'text-produccion1',
		'type' => 'textarea',
	) );

	
	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Texto 2 de produccion', 'cmb2' ),
		'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
		'id'      => $prefix . 'text-produccion2',
		'type' => 'textarea',
	) );

	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen1 para Certificaciones', 'cmb2' ),
		'desc' => esc_html__( 'agregue una imagen ', 'cmb2' ),
		'id'      => $prefix . 'certifi-img1',
		'type' => 'file',
    ) );
	$cas_campos_homepage->add_field( array(
		'name' => esc_html__( 'Imagen1 para Certificaciones', 'cmb2' ),
		'desc' => esc_html__( 'agregue una imagen ', 'cmb2' ),
		'id'      => $prefix . 'certifi-img2',
		'type' => 'file',
    ) );



}
add_action( 'cmb2_admin_init', 'cas_campos_homepage' );





function edc_campos_historia(){
	$prefix = 'edc_historia_';

	/**
	 * Repeatable Field Groups
	 */
	$edc_campos_cursos = new_cmb2_box( array(
		'id'           => $prefix . 'metabox',
		'title'        => esc_html__( 'Campos Adicionales de Historia', 'cmb2' ),
		'object_types' => array( 'clases_cocina' ),
		'context' 	=> 'normal',
		'priority'	=> 'high',
		'show_names'   => 'true',
	) );

	$edc_campos_cursos->add_field( array(
		'name' => esc_html__( 'Fecha del Acontecimiento', 'cmb2' ),
		'desc' => esc_html__( 'Añada una fecha', 'cmb2' ),
		'id'   => $prefix . 'fecha',
		'type' => 'text',
	) );

	  }
	  add_action( 'cmb2_admin_init', 'edc_campos_historia' );