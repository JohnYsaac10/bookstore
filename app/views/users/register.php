<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<?php 
     if(isset($_SESSION['user_rol'])){
          $rol=$_SESSION['user_rol'];
     }
     else{
         $rol="10";
     }
?>
    <div class="row maringButtonMediun">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
            <?php if($rol==1) : ?>
                <h2>Create An User</h2>
                <p>fill in the fields</p>

            <?php else : ?>
                <h2>Create An Acount</h2>
                <p>Please fill out this form to register with us</p>    
            <?php endif; ?> 

                <form name="registerForm" action="<?php echo URLROOT; ?>/users/register" method="post" onsubmit="return validateForm()">
                   
                  <?php if($rol==1) : ?>
             
                  <div class="form-group">
                
                     <label for="rol">Select the rol:</label>

                    <select id="rol" name="rol" class="form-control">
                         <?php  foreach($data['rols'] as $rol) : ?>
                            <option class="dropdown-item" value=<?php echo $rol->id; ?>><?php echo $rol->TipoRol; ?></option> 
                         <?php  endforeach; ?>   
                    </select> 
                  </div>
                  <?php endif; ?> 
                  

                    
                    <div class="form-group">
                        <label for="name">Name: <sup>*</sup></label>
                        <input type="text" id="inputName" name="name" class="form-control form-control-md" value="<?php echo $data['name']; ?>">
                        <span class="invalid-feedback" id="spanName"></span>
                    </div>
                    <div class="form-group">
                        <label for="surname">Surname: <sup>*</sup></label>
                        <input type="text" id="inputSurname"name="surname" class="form-control form-control-md" value="<?php echo $data['surname']; ?>">
                        <span class="invalid-feedback" id="spanSurname"></span>
                    </div>
                    <div class="form-group">
                        <label for="adress">Adress: <sup>*</sup></label>
                        <input type="text" id="inputAdress" name="adress" class="form-control form-control-md" value="<?php echo $data['adress']; ?>">
                        <span class="invalid-feedback" id="spanAdress"></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone: <sup>*</sup></label>
                        <input type="text" id="inputPhone" name="phone" class="form-control form-control-md" value="<?php echo $data['phone']; ?>">
                        <span class="invalid-feedback" id="spanPhone"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" id="inputEmail" name="email" class="form-control form-control-md <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback" id="spanEmail"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="username">Username: <sup>*</sup></label>
                        <input type="text" id="inputUsername" name="username" class="form-control form-control-md" value="<?php echo $data['username']; ?>">
                        <span class="invalid-feedback" id="spanUsername"></span>
                    </div>
                    <div class="form-group">
                        <label for="c">Password: <sup>*</sup></label>
                        <input type="password" id="inputPassword" name="password" class="form-control form-control-md" value="<?php echo $data['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        <span class="invalid-feedback" id="spanPassword"><i id="lower"></i> <i id="upper"></i> <i id="numero"></i> <i id="minimo"></i> </span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                        <input type="password" id="inputConfirm_password" name="confirm_password" class="form-control form-control-md" value="<?php echo $data['confirm_password']; ?>">
                        <span class="invalid-feedback" id="spanConfirm_password"></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Register" class="btn btn-success btn-block">
                        </div>
                        <div class="col">
                            <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">
                            Have an account? Login</a>
                        </div>
                    </div>
                
                </form>
            
            </div>
        </div>
    
    </div>

    <script src='<?php echo URLROOT; ?>/js/ValidarRegister.js'></script>

<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 