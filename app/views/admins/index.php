<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<div class="row maringButtonMediun">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
                <h2>Ofertas laborales</h2>
                <form name="loginForm" action="<?php echo URLROOT; ?>/admins/post" method="post">
                    <div class="form-group">
                        <label for="area">Area: <sup>*</sup></label>
                        <input type="text" id="inputArea" name="area" class="form-control form-control-md <?php echo (!empty($data['area_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['area']; ?>">
                        <span class="invalid-feedback" id="spanArea"><?php echo $data['area_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion: <sup>*</sup></label>
                        <textarea type="text" id="input_descripcion" name="descripcion" rows="5" class="form-control form-control-md <?php echo (!empty($data
                        ['descripcion_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['descripcion']; ?>"></textarea>
                        <span class="invalid-feedback" id="spanDescripcion"><?php echo $data['descripcion_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Postear Oferta" class="btn btn-success btn-block">
                        </div>
                    </div>
                
                </form>
            
            </div>
        </div>
    
    </div>

    <!-- <div class="container"> -->
    
    <?php  foreach($data['posts'] as $post) : ?>
       <div class="card mx-auto mb-3" style="width: 40rem;">
       <div class="card-body">
            <h3 class="card-title"> <?php echo $post->Area; ?>   </h3>
            <i class="bg-light">
                         <?php echo $post->FechaPublicacion; ?>
            </i>
            <p class="card-text"><?php  echo $post->Descripcion; ?> </p>
            
            <a href="<?php echo ($_SESSION['user_rol']==1) ? URLROOT .'/admins/eliminarPost/' . $post->id : URLROOT . '/postulants/postular/'  . $post->id;  ?>" 
            class="<?php echo ($_SESSION['user_rol']==1) ? 'btn btn-danger' : 'btn btn-primary';  ?>">
            <?php echo ($_SESSION['user_rol']==1) ? 'Eliminar' : 'Postular';  ?>
            </a>
        </div>
       </div>
        
        
    <?php  endforeach; ?>

    <!-- </div> -->

    



<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 