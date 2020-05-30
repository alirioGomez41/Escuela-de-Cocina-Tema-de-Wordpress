<section class="nosotros mt-5">
            <h2 class="mb-5 text-center separador"><?php the_field('titulo');  ?></h2>
            <div class="row">
            <?php 
                $obj1 = get_field('caracteristicas_1'); 
                $obj2 = get_field('caracteristicas_2'); 
                $obj3 = get_field('caracteristicas_3'); 
                    
            ?>
                <div class="col-md-4 text-center informacion">
                    <img src="<?php echo $obj1['icono'] ?>" alt="icono" class="img-fluid mb-3">
                    <h3><?php echo $obj1['titulo'] ?></h3>
                    <p><?php echo $obj1['descripcion'] ?> </p>
                </div> 

                <div class="col-md-4 text-center informacion">
                <img src="<?php echo $obj2['icono'] ?>" alt="icono" class="img-fluid mb-3">
                    <h3><?php echo $obj2['titulo'] ?></h3>
                    <p><?php echo $obj2['descripcion'] ?> </p>
                </div>

                <div class="col-md-4 text-center informacion">
                    <img src="<?php echo $obj3['icono'] ?>" alt="icono" class="img-fluid mb-3">
                    <h3><?php echo $obj3['titulo'] ?></h3>
                    <p><?php echo $obj3['descripcion'] ?> </p>
                </div>  
            </div>
            <?php 
            
               
            ?>
           
</section>