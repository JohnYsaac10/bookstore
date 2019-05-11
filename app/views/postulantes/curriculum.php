<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<div class="row maringButtonMediun">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
                <h2>Curriculum</h2>
                <form name="postularForm" action="<?php echo URLROOT; ?>/postulantes/editCv" method="post">
                    <div class="form-group">
                        <label for="nombres">Nombres: <sup>*</sup></label>
                        <input type="text" id="inputNombres" name="nombres" class="form-control form-control-md <?php echo (!empty($data['nombres_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nombres']; ?>">
                        <span class="invalid-feedback" id="spanNombres"><?php echo $data['nombres_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos: <sup>*</sup></label>
                        <input type="text" id="inputApellidos" name="apellidos" class="form-control form-control-md <?php echo (!empty($data['apellidos_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['apellidos']; ?>">
                        <span class="invalid-feedback" id="spanApellidos"><?php echo $data['apellidos_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion: <sup>*</sup></label>
                        <input type="text" id="inputDireccion" name="direccion" class="form-control form-control-md <?php echo (!empty($data['direccion_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['direccion']; ?>">
                        <span class="invalid-feedback" id="spanDireccion"><?php echo $data['direccion_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Telefono: <sup>*</sup></label>
                        <input type="text" id="inputTelefono" name="telefono" class="form-control form-control-md <?php echo (!empty($data['telefono_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['telefono']; ?>">
                        <span class="invalid-feedback" id="spanTelefono"><?php echo $data['telefono_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" id="inputEmail" name="email" class="form-control form-control-md <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback" id="spanEmail"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cedula: <sup>*</sup></label>
                        <input type="text" id="inputCedula" name="cedula" class="form-control form-control-md <?php echo (!empty($data['cedula_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['cedula']; ?>">
                        <span class="invalid-feedback" id="spanCedula"><?php echo $data['cedula_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad: <sup>*</sup></label>
                        <input type="text" id="inputNacionalidad" name="nacionalidad" class="form-control form-control-md <?php echo (!empty($data['nacionalidad_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nacionalidad']; ?>">
                        <span class="invalid-feedback" id="spanNacionalidad"><?php echo $data['nacionalidad_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="experiencia">Experiencia:<sup>*</sup></label>
                        <textarea type="text" id="inputExperiencia" name="experiencia" rows="5" class="form-control form-control-md <?php echo (!empty($data
                        ['experiencia_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['experiencia']; ?>"></textarea>
                        <span class="invalid-feedback" id="spanExperiencia"><?php echo $data['experiencia_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="educacion">Educacion:<sup>*</sup></label>
                        <textarea type="text" id="inputEducacion" name="educacion" rows="5" class="form-control form-control-md <?php echo (!empty($data
                        ['educacion_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['educacion']; ?>"></textarea>
                        <span class="invalid-feedback" id="spanEducacion"><?php echo $data['educacion_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Actualizar" class="btn btn-success btn-inline">
                            <a href="<?php echo URLROOT; ?>/postulantes/index" class="btn btn-danger btn-inline">Cancelar</a>
                        </div>
                    </div>
                
                </form>
            
            </div>
        </div>
    
    </div>


<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 