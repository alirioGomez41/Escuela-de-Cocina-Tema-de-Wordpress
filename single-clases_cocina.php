<?php get_header(  );?>
    
    <?php while(have_posts(  )):the_post(  );?>

        <?php get_template_part('template-parts/contenido','post') ?>
        <?php 
                    $informacion_extra = get_field('informacion_extra_del_curso');
                    $informacion_curso = get_field('informacion_del_curso');
                    $author = get_field('chef_instructor_del_curso');
                    var_dump($author);
        ?>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6">
                    <h2 class="separador text-center my-lg-3">¿Qué incluye?</h2>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-secondary text-light"><?php echo $informacion_extra['que_incluye_el_curso']['campo_1'] ?></li>
                        <li class="list-group-item list-group-item-secondary text-light"><?php echo $informacion_extra['que_incluye_el_curso']['campo_2'] ?></li>
                        <li class="list-group-item list-group-item-secondary text-light"><?php echo $informacion_extra['que_incluye_el_curso']['campo_3'] ?></li>
                    </ul>
                    <h2 class="separador text-center my-lg-3 mt-5">Información</h2>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary text-light"><?php echo $informacion_extra['cupo'] ?> Cupos Disponibles</li>
                        <li class="list-group-item list-group-item-primary text-light">Costo <?php echo $informacion_extra['cupo'] ?></li>
                        <li class="list-group-item list-group-item-primary text-light">Fecha de inicio: <?php echo $informacion_curso['fecha_de_inicio_del_curso'] ?></li>
                    </ul>
                </div>
               
                <div class="col-md-6 text-center">
                   
                    <h2 class="separador mt-5 my-md-3">Imparte</h2>
                    
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <!-- <img src="img/instructor.jpg" alt="imagen instructor" class="img-fluid rounded-circle mb-3"> -->
                          <?php $img = get_field('foto', get_option('page_for_posts')); ?>
                        </div>
                    </div>
                    <p class="instructor"><?php echo $author ['post_title'] ?></p>
                    <p><?php  ?> </p>
                </div>
            </div>
        </div>
    <?php endwhile;?>
    
<?php get_footer(); ?>