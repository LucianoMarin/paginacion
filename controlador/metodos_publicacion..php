<?php


include_once('../rutas.php');





class metodos_publicacion
{


    function mostrarPublicaciones($desplazamiento,$registrosPorPagina)
    {
        $con = new Conexion();
        $sql =  "SELECT * FROM publicaciones LIMIT $desplazamiento, $registrosPorPagina";
        $query = $con->n_conexion()->prepare($sql);
        $query->execute();


        return $query->fetchAll();
    }

    
    function contadorPublicacion(){

        $con = new Conexion();
        $sql = "SELECT COUNT(*) FROM publicaciones";
        $query = $con->n_conexion()->prepare($sql);
        $query->execute();
        return $query->fetchColumn();


    }


}
