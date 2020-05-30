<?php 

/*
Template Name: Pagina listado de clases
*/
get_header();
?>


<div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <blockquote class="subtitulo text-center pl-3">  
                    <?php while(have_posts(  )):the_post(  );?>
                        <?php the_content(); ?>
                    <?php endwhile;?>
                </blockquote>
                
            </div>
        </div>
</div>

<?php 
    edc_clases_queries();

?>

<?php 
get_footer();
?>















