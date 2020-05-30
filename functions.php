<?php 

/*Agregando POSTTYPES */
require_once dirname(__FILE__) . '/inc/posttypes.php';

/*Agregando queries */ 
require_once dirname(__FILE__) . '/inc/queries.php';
/*

/*Agregando Widgets */ 
require_once dirname(__FILE__) . '/inc/widgets.php';
/*

Funciones que se cargan al activar el tema
*/


/*Imagenes destacada*/
add_action('init', 'edc_imagen_destacada');
function edc_imagen_destacada($id)
{
  $imagen = get_the_post_thumbnail_url( $id, 'full' );
  /*La funcion de arriba te devuelve la ubicacion de la imagen*/ 
  $html = '';/*html vacio por si no existe la imagen no se imprime nada*/
  $clase = false;
  if($imagen)
  {
    $clase = true;
    $html .= '<div class="container">';
    $html .= '<div class="row">';
    $html .= '<div class="col-12 imagen-destacada">';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    //agregando estilos linealmente
    wp_register_style('custom',false);
    wp_enqueue_style('custom');

    //creando el css en el custom
    $imagen_destacada_css = "
    .imagen-destacada{
      background-image:url({$imagen});
    }
    ";
    wp_add_inline_style( 'custom', $imagen_destacada_css );

  } 
  return array($html,$clase);
}




function edc_setup()
{
  /*Agregando tamaño para imagenes */
  add_image_size('mediano', 510, 340, true);
 
  /*Habilitando imagen destacada*/
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');

  /*Menus*/
  register_nav_menus(array(
    'menu_principal' => esc_html__( 'Menu Principal', 'escuelacocina')
  ));

}

add_action('after_setup_theme','edc_setup');

/*
Agregando nav link al menu principal
*/
function edc_enlace_class($atts, $item, $args)
{

  if($args->theme_location == 'menu_principal')
  {
    $atts['class'] = 'nav-link';
  }
  return $atts;
}
add_filter('nav_menu_link_attributes','edc_enlace_class',10, 3);


/*
Cargando scripts y CSS
*/

function edc_script()
{
    /*Css */
    wp_enqueue_style( 'bootstrapCss', get_template_directory_uri() . "/css/bootstrap.css", array(), '4.1.3');
    wp_enqueue_style( 'style', get_stylesheet_uri(),array('bootstrapCss'), '1.0.0');
  /*Script */
    wp_enqueue_script( 'popperJs', get_template_directory_uri() . "/js/popper.js", array('jquery'),'1.0',true);
    wp_enqueue_script( 'bootstrapJs', get_template_directory_uri() . "/js/bootstrap.js", array('popperJs'),'4.1.3',true);
}
add_action('wp_enqueue_scripts','edc_script');

/*Widgets*/

function edc_widget()
{
  $args = array(
    'name' => 'Widget Lateral',
    'id' =>'sidebar_widget',
    'before_widget' => '<div class="proximos-cursos">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="text-center text-light separador inverso">',
    'after_title' => '</h2>'
  );
  register_sidebar($args);
}
add_action('widgets_init','edc_widget');