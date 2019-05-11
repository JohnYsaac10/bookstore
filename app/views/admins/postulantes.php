<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

    <!-- <div class="container"> -->
    
    <?php  foreach($data['posts'] as $post) : ?>
       <div class="card mx-auto mb-3" style="width: 40rem;">
       <div class="card-body">
            <h3 class="card-title"> <?php echo $post->Area; ?>   </h3>
            <i class="bg-light">
                         <?php echo $post->fecha; ?>
            </i>
            <p class="card-text">Disponibilidad: <?php  echo $post->disponibilidad ; ?>, Viajar: <?php  echo $post->viajar ; ?>, Experiencia: <?php  echo $post->descripcion ; ?></p>
            <p class="card-text"><?php  echo $post->nombres ; ?>, tel: <?php  echo $post->telefono ; ?>, email: <?php  echo $post->email ; ?></p>
            
            
        </div>
       </div>
        
        
    <?php  endforeach; ?>

    <!-- </div> -->

    



<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 