<?php  require_once APPROOT. '/views/inc/header.php'; ?> 


<?php  foreach($data['posts'] as $post) : ?>
       <div class="card mx-auto mb-3" style="width: 40rem;">
       <div class="card-body">
            <h3 class="card-title"> <?php echo $post->Area; ?>   </h3>
            <i class="bg-light">
                         <?php echo $post->FechaPublicacion; ?>
            </i>
            <p class="card-text"><?php  echo $post->Descripcion; ?> </p>
            
            <a href="<?php echo ($_SESSION['user_rol']==1) ? URLROOT .'/admins/eliminarPost/' . $post->id : URLROOT . '/postulantes/postular/'  . $post->id;  ?>" 
            class="<?php echo ($_SESSION['user_rol']==1) ? 'btn btn-danger' : 'btn btn-primary';  ?>">
            <?php echo ($_SESSION['user_rol']==1) ? 'Eliminar' : 'Postular';  ?>
            </a>
        </div>
       </div>
        
        
    <?php  endforeach; ?>

    <!-- </div> -->

    



<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 