<?php


function edc_clases_queries($cant = -1)
{
?>
<div class="container mt-5">
   <div class="row">
   <?php 
        $args = array( 
            'post_type' => 'clases_cocina',
            'posts_per_page'=> $cant
        );
        $query = new WP_Query($args);
 
        while($query->have_posts()):$query->the_post();  
    ?>
    <?php 
    $informacion_curso = get_field('informacion_del_curso');
    $datos = get_field('informacion_extra_del_curso');
    ?>
          <div class="col-md-6 col-lg-4 ">
                    <div class="card">
                     <?php the_post_thumbnail( 'mediano', array('class'=> 'img-fluid') ) ?>
                        <div class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            <p class="m-0">Fecha de inicio:<?php echo $informacion_curso['fecha_de_inicio_del_curso'] ?><br>Hora de inicio: <?php echo $informacion_curso['hora_de_inicio_de_clase'] ?> hrs</p>
                            <span class="badge badge-secondary py-2"><?php echo $datos['precio_del_curso']; ?>$</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?php the_title() ?></h3>
                          
                            <p class="card-text">
                           <?php echo wp_trim_words( get_the_content( ),20)  ?>
                            </p>
                            <a href="<?php the_permalink(  )?>" class="btn btn-primary d-block d-md-inline">Más Información</a>
                        </div>
                    </div> <!--card-->
            </div><!--col-md-6-->

    <?php endwhile; wp_reset_postdata(); ?>
   </div>
</div>





<?php
}