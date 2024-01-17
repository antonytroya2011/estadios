<?php
  /**
   * 
   */
  class Estadios extends CI_Controller
  {

    function __construct()
    {
      parent::__construct();
      $this->load->model("Estadio");
      // Desabilitando errores y advertencias de php 
      error_reporting(0);
      // code...
    }
    //renderizacion de la vista index de hospitales
    public function index(){
      $data["listadoEstadios"]= $this->Estadio->consultarTodos() ;
      $this->load->view("header");
      $this->load->view("estadios/index",$data);
      $this->load->view("footer");
    }
    public function mapas(){
        $data["listadoEstadios"]= $this->Estadio->consultarTodos() ;
        $this->load->view("header");
        $this->load->view("estadios/mapas",$data);
        $this->load->view("footer");
      }

    public function borrar($id_hos){
      $this->Estadio->eliminar($id_hos);
      $this->session->set_flashdata("confirmacion","Estadio eliminado ");      

      redirect("estadios/index");

    }

    //renderizcion del formulario nuevo hospital
    public function nuevo(){
      $this ->load->view("header");
      $this->load->view("estadios/nuevo");
      $this->load->view("footer");
    }



    //Capturando datos e insertando en hospital
    public function guardarEstadio(){
      $datosNuevoEstadio = array(
        "nombreEstadioTU"=>$this->input->post("nombreEstadioTU"),
        "capacidadEstadioTU"=>$this->input->post("capacidadEstadioTU"),
        "latitudEstadioTU"=>$this->input->post("latitudEstadioTU"),
        "longitudEstadioTU"=>$this->input->post("longitudEstadioTU")
      );
      $this->Estadio->insertar($datosNuevoEstadio);
      //flash_data -> Crear una session de tipo flash
      $this->session->set_flashdata("confirmacion"," gurdato exitosamente");      
      redirect("estadios/index");
    }
  }//Cierre de la clase

 ?>
