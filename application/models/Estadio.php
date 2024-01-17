<?php
  /**
   *
   */
  class Estadio extends CI_Model
  {

    function __construct()
    {
        parent::__construct();
      // code...

    }
    //insertar datos
    function insertar($datos){
        $respuesta=$this->db->insert("estadioTU",$datos) ;
        return $respuesta;
    }
    //consulta de datos
    function consultarTodos(){
        $estadios=$this->db->get("estadioTU") ;
        if ($estadios->num_rows()> 0){
            return $estadios->result();
        }else{
            return false;
        }
    }
    //eliminacion de un hospital por id
    function eliminar($id){
        $this->db->where("idEstadioTU",$id);
        return $this->db->delete("estadioTU");
    }
 }
    

?>


