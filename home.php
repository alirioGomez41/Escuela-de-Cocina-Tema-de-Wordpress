

<?php get_header(  );?>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="subtitulo text-center pl-3">  
                <?php                 
                    $slogan = get_field('slogan', get_option('page_for_posts'));
               
                   
                ?>
                 <p><?php echo $slogan; ?></p>
                </blockquote>
                
            </div>
        </div>
</div>

    <div class="container">
        <div class="row">
            <main class="col-lg-9 col-md-8">
                <h1 class="separador text-center mb-3">Nuestro Blog</h1>
              
      
           
             <?php while(have_posts(  )):the_post(  );?>
             
            
                <div class="row entrada mb-4">
                    <div class="col-md-4">
                        <?php the_post_thumbnail('mediano',array('class' => 'img-fluid')) ?>
                    </div>
                    <div class="col-md-8">
                        <div class="contenido-entrada pt-4 pt-md-0">
                            <a href="<?php the_permalink()?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                            
                            <?php get_template_part('template-parts/meta','post') ?>

                            <p><?php the_excerpt(  ) ?></p>
                            <a href="<?php the_permalink( )?>" class="btn btn-primary text-light">Ver entrada</a>
                        </div>
                    </div>
                </div> <!--row-->
            <?php endwhile;?>
            <ul class="pagination justify-content-center mt-5">
                <li class="page-item">     
                    <?php previous_posts_link( '<span class="page-link" aria-hidden="true">&laquo; Anterior</span>
                                                
                    ' ); ?>      
                </li>
                <li class="page-item">     
                    <?php next_posts_link( '<span class="page-link" aria-hidden="true">Siguiente&raquo;</span>
                                       
                    ' ); ?>      
                </li>
            </ul>
            </main>
            <?php get_sidebar() ?>
    </div>
<?php get_footer(); ?>