<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<div class="row maringButtonMediun">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
                <h2><?php echo $data['posts'][0]->Area; ?></h2>
                <form name="postularForm" action="<?php echo URLROOT; ?>/postulantes/postular/<?php echo $data['id_post']; ?>" method="post">
                    <div class="form-group">
                        <label for="disponibilidad">Disponibilidad (medio tiempo, tiempo completo): <sup>*</sup></label>
                        <input type="text" id="inputDisponibilidad" name="disponibilidad" class="form-control form-control-md <?php echo (!empty($data['disponibilidad_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['disponibilidad']; ?>">
                        <span class="invalid-feedback" id="spanDisponibilidad"><?php echo $data['disponibilidad_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="viajar">Disponibidad para viajar (si, no): <sup>*</sup></label>
                        <input type="text" id="inputViajar" name="viajar" class="form-control form-control-md <?php echo (!empty($data['viajar_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['viajar']; ?>">
                        <span class="invalid-feedback" id="spanViajar"><?php echo $data['viajar_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion trabajo anterior: (puesto, años experiencia)<sup>*</sup></label>
                        <textarea type="text" id="input_descripcion" name="descripcion" rows="5" class="form-control form-control-md <?php echo (!empty($data
                        ['descripcion_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['descripcion']; ?>"></textarea>
                        <span class="invalid-feedback" id="spanDescripcion"><?php echo $data['descripcion_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Postular" class="btn btn-success btn-inline">
                            <a href="<?php echo URLROOT; ?>/postulantes/index" class="btn btn-danger btn-inline">Cancelar</a>
                        </div>
                    </div>
                
                </form>
            
            </div>
        </div>
    
    </div>


<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 