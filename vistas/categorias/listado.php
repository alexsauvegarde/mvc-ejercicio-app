
<?php include __DIR__ . '/../head.php';?>
<?php include __DIR__ . '/../menu.php';?>

<div class="container">
  <div class="row">
  <div class="col-sm">
    <h1><?php echo $datos['titulo'] ?></h1>
  </div>
    
     
    <div class="col-sm">
    <p><?php echo $datos['texto'] ?></p>
    </div>
    <div class="col-sm">
    
    <table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha</th>
        <th>Autor</th>
        <th>Estado</th>
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    while($categoria = $listado_categoria->fetch())
    {
    ?>
    <tr>
    <td><a href=index.php?controlador=categoria&accion=detalle&id=<?php echo $categoria['id_cat']?>><?php echo $categoria['id_cat']?></a></td>
        <td><?php echo $categoria['id_cat']?></td>
        <td><?php echo $categoria['nombre']?></td>
        <td><?php echo $categoria['fecha']?></td>
        <td><?php echo $categoria['site']?></td>
    </tr>
    <?php
    }
    ?>
</table>

     
    </div>
  </div>
</div>    

    
 
<?php include __DIR__ . '/../footer.php';?> 