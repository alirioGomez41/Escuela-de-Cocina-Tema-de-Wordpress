<div class="row justify-content-center">
    <div class="col-md-8">
        <?php 
            comment_form();
         ?>
    </div>
    <div class="col-md-8">
        <h2 class="text-center">Comentarios</h2>
        <ul class="lista-comentarios alert list-unstyled">
            <?php
                $comentario = get_comments(
                    array(
                        'post_id' => $post->ID,
                        'status' => 'approve'
                    ));

                wp_list_comments(array(
                    'per-page'=> 10,
                    'reverse_top_level' =>false
                ),$comentario);
            ?>
        </ul>
    </div>
</div>