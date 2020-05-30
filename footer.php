<footer class="footer p-5">
        <div class="container">
            <div  class="row">
                <div class="col-md-8">
                   
                    <?php 
                      $args = array(
                        'menu_class' => 'nav text-uppercase d-flex flex-column flex-md-row text-center text-md-left',/*Container UL*/ 
                        'theme_location' => 'menu_principal'
                    );

                    wp_nav_menu($args);
                    
                    ?>



                </div>
                <div class="col-md-4">
                    <p class="text-center text-md-right mt-4 mt-md-0">Todo los derechos reservados <?php echo DATE('yy') ?></p>
                </div>
            </div>
        </div>
    </footer>

    <?php 
        wp_footer(  );
    ?>
</body>
</html>