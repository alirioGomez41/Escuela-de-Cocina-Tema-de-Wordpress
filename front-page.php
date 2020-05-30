<?php get_header() ?>

<div class="container-fluid imagenes-principales">
        <div class="row imagen-superior imagen">
            <div class="col-md-6 bg-primary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center text-light py-3">
                            <h2 class="text-uppercase"><?php the_field('titulo_principal_1') ?></h2>
                            <p>
                                <?php the_field('parrafo_1') ?>
                               
                            </p>
                        </div>

                    </div>
                    
                </div>
            </div>
      
            <div class="col-md-6 bg-vino" style="background-image: url(<?php the_field('imagen_principal_1') ?>)"></div>
        </div>

        <div class="row imagen-inferior imagen">
            <div class="col-md-6 bg-secondary">
                <div class="row justify-content-center align-items-center h-100">
                    <div class="col-sm-8 col-md-6">
                        <div class="contenido text-center  py-3">
                            <h2 class="text-uppercase"><?php  the_field('titulo_principal_2') ?></h2>
                            <p>
                            <?php the_field('parrafo_2') ?>
                            </p>
                            <?php the_field('prueba1') ?>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 bg-comida" style="background-image: url(<?php the_field('imagen_principal_2') ?>)"></div>
        </div>
    </div>



    <div class="container">
        <?php 
            $args = array( 'post_type' => 'nosotros' );
            $query = new WP_Query($args);

            while($query->have_posts()):$query->the_post();
                get_template_part('template','parts/iconos'); 
            endwhile; wp_reset_postdata();
        ?>
    </div>


    <section class="clases  py-5">
        <h1 class="separador text-center mb-3">Próximas Clases</h1>

        <div class="container">
            <div class="row">
               <?php 
                edc_clases_queries(3);
               ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-4 ">
                    <a class="btn btn-primary" href="<?php echo get_permalink(get_page_by_title('Clases')) ?>">Ver toda las clases</a>
                </div>
            </div>
        </div>
    </section>


    <div class="licenciatura" style=" background-image: url(<?php the_field('imagen_inferior')?>);">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center text-light">
                    <h2><?php the_field('titulo_inferior') ?></h2>
                    <p class="display-4"><?php the_field('parrafo_3') ?></p>
                    <a href="contacto.html" class="btn btn-primary text-uppercase">Más Información</a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>