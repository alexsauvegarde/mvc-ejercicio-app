
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

    <?php // Extraer TODAS las FILAS de la tabla USUARIO
    while($usuario = $listado_usuarios->fetch())
    {
    ?> 
    <tr>  <?php //Imprime el valor de todas las COLUMNAS ?>
        <td><?php echo $usuario['id_usuario']?></td>
        <td><?php echo $usuario['login']?></td>
        <td><?php echo $usuario['contrasena']?></td>
        
    </tr>
   
    <?php
    }
    ?>
     </table>
    </div>
  </div>
</div>    

    
 
<?php include __DIR__ . '/../footer.php';?>  
   

 