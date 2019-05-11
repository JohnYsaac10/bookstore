<?php  require_once APPROOT. '/views/inc/header.php'; ?> 

<style>
.texto-col{

    width: 40%;
}

.mb-10{
    margin-bottom: 8rem;
}

</style>

<div class="col-md-8 mx-auto mb-10 mt-5">


  <!-- <form name="pedidoForm" action="#" method="post" onsubmit="return validateForm()"> -->
    
    <label for="total">Total $:</label>
    <input type="text" name="total" id="total" value=0.0 class="col-4 form-control form-control-md" readonly>


    <div class="form-group">
        <label for="name">Observaciones:</label>
        <input type="text" id="inputObservaciones" name="observaciones" class="form-control form-control-md" value="<?php echo $data['observaciones']; ?>">
    </div>

    <label for="libros">Textos:</label>

    <select id="libros" name="libros" class="form-control">
        <?php  foreach($data['libros'] as $book) : ?>
            <option class="dropdown-item" value=<?php echo $book->id; ?>><?php echo $book->titulo; ?> <?php echo $book->yearOfPublication; ?> <?php echo $book->edicion; ?></option> 
        <?php  endforeach; ?>   
    </select>

       <div class="form-group clearfix">
        <div class="float-left">
            <label for="name">Stock:</label>
            <input type="text" id="inputStock" name="stock" class="col-10 form-control form-control-md" value=0 readonly>
        </div>
        <div class="float-left">
             <label for="name">Cantidad:</label>
             <input type="number" id="inputCantidad" name="cantidad" class="col-10 form-control form-control-md" value="<?php echo $data['cantidad']; ?>"> 
        </div>
        <div class="float-left">
            <label for="name">Subtotal:</label>
            <input type="text" id="inputSubtotal" name="subtotal" class="col-10 form-control form-control-md" value="<?php echo $data['subtotal']; ?>" readonly>
        </div>
        
        <button type="submit" class="agregar btn btn-warning mt-4" id="agregar">agregar</button>
    </div>

    <table class="table mb-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" class="texto-col">Texto</th>
                <th scope="col">PVP</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Operacion</th>
            </tr>
        </thead>
  <tbody>
    <tr class="item-%id%">
        <th scope="row">%counter%</th>
        <td>%libro%</td>
        <td>%pvp%</td>
        <td>%cantidad%</td>
        <td>%subtotal%</td>
        <td>
            <button class="btn btn-warning">/</button>
            <button class="btn btn-danger">X</button>
        </td>
    </tr>
  </tbody>
</table>
    
    <!-- </form> -->

    <!-- <button class="btn btn-warning glyphicon glyphicon-pencil"></button>
            <button class="btn btn-danger glyphicon glyphicon-remove"></button> -->


    <!-- FALTA BUTTON HACER PEDIDO -->


</div>

<script src="<?php echo URLROOT?>/js/pedido.js"></script>








<?php  require_once APPROOT. '/views/inc/footer.php'; ?> 

<!-- 
<a href="<?php echo ($_SESSION['user_rol']==1) ? URLROOT .'/admins/eliminarPost/' . $post->id : URLROOT . '/postulants/postular/'  . $post->id;  ?> -->