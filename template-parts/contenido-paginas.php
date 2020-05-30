        
        <?php
            $html = edc_imagen_destacada(get_the_ID());
            //html[0]: es el html
            //html[1]: booleano
            echo $html[0];
        ?>   
         
        <main class="container">
            <div class="row justify-content-center">
                <div class="py-3 px-5 contenido-pagina bg-light <?php echo $html[1] == true ? 'col-md-8 destacada': 'col-md-12 no-destacada' ?>">
                    
                    <h1 class="text-center my-5 separador"><?php the_title() ?></h1>
                    
                    <?php the_content() ?>
                </div>
            </div><!--row-->
        </main>