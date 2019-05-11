<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<div class="row maringButtonMediun">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php flash('register_success'); ?>
                <h2>Crear Articulo</h2>
                <form name="loginForm" action="<?php echo URLROOT; ?>/admins/createItem" method="post">
                    <div class="form-group">
                        <label for="ISBN">ISBN: <sup>*</sup></label>
                        <input type="text" id="inputISBN" name="ISBN" class="form-control form-control-md <?php echo (!empty($data
                        ['ISBN_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['ISBN']; ?>"></input>
                        <span class="invalid-feedback" id="spanISBN"><?php echo $data['ISBN_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="titulo">Titulo: <sup>*</sup></label>
                        <input type="text" id="inputTitulo" name="titulo" class="form-control form-control-md <?php echo (!empty($data
                        ['titulo_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['titulo']; ?>"></input>
                        <span class="invalid-feedback" id="spanTitulo"><?php echo $data['titulo_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor: <sup>*</sup></label>
                        <input type="text" id="inputAutor" name="autor" class="form-control form-control-md <?php echo (!empty($data
                        ['autor_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['autor']; ?>"></input>
                        <span class="invalid-feedback" id="spanAutor"><?php echo $data['autor_err']; ?></span>
                    </div>
                    <div class="form-group">
                
                        <label for="rol">Tematica:</label>

                        <select id="tematica" name="tematica" class="form-control">
                        <?php  foreach($data['temas'] as $theme) : ?>
                            <option class="dropdown-item" value=<?php echo $theme->id; ?>><?php echo $theme->tema; ?></option> 
                        <?php  endforeach; ?>   
                        </select> 
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripcion: <sup>*</sup></label>
                        <textarea type="text" id="inputDescripcion" rows="5" name="descripcion" class="form-control form-control-md <?php echo (!empty($data
                        ['descripcion_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['descripcion']; ?>"></textarea>
                        <span class="invalid-feedback" id="spanDescripcion"><?php echo $data['descripcion_err']; ?></span>
                    </div>
                    <!-- <div class="form-group">
                        <label for="nPages">Numero de paginas <sup>*</sup></label>
                        <input type="text" id="inputNpages" name="nPages" class="form-control form-control-md <?php echo (!empty($data
                        ['nPages_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['nPages']; ?>"></input>
                        <span class="invalid-feedback" id="spanNpages"><?php echo $data['nPages_err']; ?></span>
                    </div> -->
                    <div class="form-group">
                        <label for="editorial">Editorial: <sup>*</sup></label>
                        <input type="text" id="inputEditorial" name="editorial" class="form-control form-control-md <?php echo (!empty($data
                        ['editorial_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['editorial']; ?>"></input>
                        <span class="invalid-feedback" id="spanEditorial"><?php echo $data['editorial_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="yearOfPublication">Año de Publicacion: <sup>*</sup></label>
                        <input type="number" id="inputYearOfPublication" name="yearOfPublication" class="form-control form-control-md <?php echo (!empty($data
                        ['yearOfPublication_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['yearOfPublication']; ?>"></input>
                        <span class="invalid-feedback" id="spanYearOfPublication"><?php echo $data['yearOfPublication_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="nPages">Numero de paginas: <sup>*</sup></label>
                        <input type="number" id="inputNpages" name="nPages" class="form-control form-control-md <?php echo (!empty($data
                        ['nPages_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['nPages']; ?>"></input>
                        <span class="invalid-feedback" id="nPages"><?php echo $data['nPages_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="edicion">Edicion: <sup>*</sup></label>
                        <input type="text" id="inputEdicion" name="edicion" class="form-control form-control-md <?php echo (!empty($data
                        ['edicion_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['edicion']; ?>"></input>
                        <span class="invalid-feedback" id="edicion"><?php echo $data['edicion_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pvp">PVP: <sup>*</sup></label>
                        <input type="text" id="inputPvp" name="pvp" class="form-control form-control-md <?php echo (!empty($data
                        ['pvp_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['pvp']; ?>"></input>
                        <span class="invalid-feedback" id="pvp"><?php echo $data['pvp_err']; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="estanteria">Estanteria: <sup>*</sup></label>
                        <input type="text" id="inputEstanteria" name="estanteria" class="form-control form-control-md <?php echo (!empty($data
                        ['estanteria_err']))? 'is-invalid' : ''; ?>" value="<?php echo $data['estanteria']; ?>"></input>
                        <span class="invalid-feedback" id="spanEstanteria"><?php echo $data['estanteria_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Crear Item" class="btn btn-success btn-block">
                        </div>
                    </div>
                
                </form>
            
            </div>
        </div>
    
    </div>



    



<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 