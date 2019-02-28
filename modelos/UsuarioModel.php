<?php

class UsuarioModel
{
    // guardamos la REFERENCIA A LA CONEXIÓN 
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        // estableciendo la conexión o recuperándo la conexión
        $this->db = SPDO::singleton();
    }
 // CRUD

    public function listadoTotal()
    {
        //realizamos la consulta de todos los usuarios
        $consulta = $this->db->prepare('SELECT * FROM usuario');
      
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
    public function detalle($id_usuario)
    {
        //realizamos la consulta de todos los usuarios
        $consulta = $this->db->prepare('SELECT * FROM usuario where id_usuario= :id');
        $consulta->execute(['id' => $id_usuario]);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>