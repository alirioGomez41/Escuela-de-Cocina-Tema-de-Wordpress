        
        <?php
            $html = edc_imagen_destacada(get_the_ID());
            //html[0]: es el html
            //html[0]: booleano
            echo $html[0];
        ?>   
         
        <main class="container">
            <div class="row justify-content-center entrada">
                <div class="py-3 px-5 contenido-entrada bg-light <?php echo $html[1] == true ? 'col-md-8 destacada': 'col-md-12 no-destacada' ?>">
                <h1 class="text-center my-5 separador"><?php the_title() ?></h1>

                    <?php get_template_part('template-parts/meta','post') ?>
     
                    <?php the_content() ?>
                </div>
            </div><!--row-->
        </main>