<?php
  /*--------------------------
  Autor: Florencio Angel Luis Moya
  Mail: faluis@atsistemas.com
  ----------------------------*/

  class Database{
    private $con;
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $dbname="tuto_poo";
    public function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
      if(mysqli_conect_error()){
        die("Conexion a la base de datos fallo " . mysqli_conect_error() . mysqli_conect_error());
      }
    }
    public function sanitize($var){
    $return = mysqli_real_escape_string($this->con, $var);
    return $return;
  }
}

    function create($nombres,$apellidos,$telefono,$direccion,$correo_electronico){
	     $sql = "INSERT INTO `clientes` (nombres, apellidos, telefono, direccion, correo_electronico) VALUES ('$nombres', '$apellidos', '$telefono', '$direccion', '$correo_electronico')";
	     $res = mysqli_query($this->con, $sql);
	       if($res){
	          return true;
	       }else{
	          return false;
              }
         }
  function read(){
    $sql = "SELECT * FROM clientes";
    $res = mysqli_query($this->con, $sql);
    return $res;
  }
?>
