<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>
<header class="header py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-8 col-md-4 mb-4 mb-md-0">
                    <a href="<?php echo esc_attr__( home_url('/'))?>">
                        <img src="<?php echo get_template_directory_uri()?> /img/logo.svg" alt="logo" class="img-fluid">
                    </a>
                </div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-md navbar-light justify-content-center">

                        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav_principal" aria-expanded="false" type="button">
                            <span class="navbar-toggler-icon"></span>
                        </button>


            
                        <?php 
                        /*
                        estructura de wp_nav_menu
                            div
                                ul
                                    li
                                    li
                                    li
                                ul
                            div
                        */ 
                            $args = array(
                                'menu_class' => 'nav nav-justified flex-column flex-md-row justify text-center justify-content-lg-end',/*Container UL*/
                                'container_id' => 'nav_principal',
                                'container_class' => 'collapse navbar-collapse justify-content-center justify-content-lg-end text-uppercase',/*Container div*/ 
                                'theme_location' => 'menu_principal'
                            );

                            wp_nav_menu($args);
                        
                        ?>
                    </nav>


                </div> <!--Col md 8-->
            </div>
        </div>
    </header>