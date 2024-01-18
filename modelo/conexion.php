<?php


class Conexion
{

    public $url = 'localhost';
    public $db = 'paginacion';
    public $user = 'root';
    public $pass = '';



    function n_conexion()
    {
        try {
            $con = new PDO('mysql: dbhost='. $this->db .'; dbname='.$this->db.'', $this->user, $this->pass);
            $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            
      



        } catch (Exception $ex) {


            return print_r($ex->getMessage());
        }


        return $con;


    }
}
