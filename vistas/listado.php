<?php include ('head.php') ?>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Login</th>
        <th>Contraseña</th>
       
    </tr>
    <?php
    // $listado es una variable asignada desde el controlador ItemsController.
    while($usuario = $listado_usuarios->fetch())
    {
    ?>
    <tr>
        <td><a href=index.php?controlador=usuario&accion=detalle&id=<?php echo $usuario['id_usuario']?>></a><?php echo $usuario['id_usuario']?></td>
        <td><?php echo $usuario['id_usuario']?></td>
        <td><?php echo $usuario['nombre']?></td>
        <td><?php echo $usuario['login']?></td>
        <td><?php echo $usuario['contrasena']?></td>
         
    </tr>
    <?php
    }
    ?>
</table>
</body>
</html>