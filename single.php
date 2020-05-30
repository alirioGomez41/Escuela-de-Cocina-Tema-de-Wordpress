<?php get_header(  );?>
    
    <?php while(have_posts(  )):the_post(  );?>

        <?php get_template_part('template-parts/contenido','post') ?>

        <div class="comentarios container">
            <?php 
                if( comments_open() || get_comments_number())
                {
                    comments_template();
                }
                else
                {
                    echo "<p class =\"text-center alert alert-danger comentarios-cerrados\"> Los comentarios están cerrados</p>";
                }            
            ?>
        </div>
    <?php endwhile;?>
    
<?php get_footer(); ?>