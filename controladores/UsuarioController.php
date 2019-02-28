<?php

class UsuarioController
{
    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }

    //    index.php?controller=index&accion=index
    public function index(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de inicio de usuarios";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/index.php", $data);        
    }
    //   index.php?controller=index&accion=listado
    public function listado(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de Listado de usuarios";
        
        //Pasamos a la vista toda la información que se desea representar
        $data['datos'] = $index;

        // CONSULTAMOS AL MODELO INDEX los DATOS
        include __DIR__ . '/../modelos/UsuarioModel.php';
        // creamos un objeto del modelo INDEX
        $listado = new UsuarioModel();
        // ejecutamos la función de CONSULTA a la BD
        $listado_usuarios = $listado->listadoTotal();

        // le pasamos el resultado a la VISTA
        $data['listado_usuarios'] = $listado_usuarios;        
        
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/listado.php", $data);        
    }


    public function formulario(){
        //Guardamos en un array los datos a mostrar en la vista
        $index['titulo'] = "Usuarios";
        $index['texto'] = "Estas en la página de Listado de usuarios";
         //Pasamos a la vista toda la información que se desea representar
         $data['datos'] = $index;
        //Finalmente presentamos nuestra plantilla         
        $this->view->show("usuarios/formulario.php", $data);        
    }

 
 public function detalle(){
    // index.php?controlador=categoria&accion=detalle&id=33       
        if(isset($_GET['id']))
        {    
            $id = $_GET['id'];    
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Usuario/Detalle";
            $index['texto'] = "Estas en la página de Detalle de Usuario id $id";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;
            //Finalmente presentamos nuestra plantilla

            // consulta al Modelo Categoria sobre el Listado De Todas las categorías
            include __DIR__ . '/../modelos/UsuarioModel.php';
            
            // creamos un objeto del modelo CATEGORIA
            $listado = new UsuarioModel();
            // ejecutamos la función de CONSULTA a la BD
            $detalle_usuario = $listado->detalle($id);

            // le pasamos el resultado a la VISTA
            $data['detalle_usuario'] = $detalle_usuario;   

            //
        }
        else
        {
            //Guardamos en un array los datos a mostrar en la vista
            $index['titulo'] = "Usuario/Detalle";
            $index['texto'] = "Error.. Usuario no encontrado";
            //Pasamos a la vista toda la información que se desea representar
            $data['datos'] = $index;  

        }         
        $this->view->show("usuarios/detalle.php", $data);        
    }
     
}
?>