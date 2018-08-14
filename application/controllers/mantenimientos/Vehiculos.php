<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {
	private $modulo = "Vehiculos";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Vehiculos_model");
		$this->load->model("Mantenimientos_model");
		$this->load->model("Proveedores_model");
		$this->load->library('user_agent');
	}


	public function index()
	{
		$contenido_interno = array(
			"vehiculos" => $this->Vehiculos_model->getVehiculos("1"),

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/mantenimientos/vehiculos",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function listar($id){
		$contenido_interno = array(
			"vehiculo" => $this->Vehiculos_model->getVehiculo($id),
			"mantenimientos" => $this->Vehiculos_model->getMantenimientos($id),
			"tipomantenimientos" => $this->Vehiculos_model->getTipoMantenimientos(),
			"proveedores" => $this->Proveedores_model->getProveedores("1"),

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/mantenimientos/lm_vehiculos",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function store(){
		$idVehiculo = $this->input->post("idVehiculo");
		
		$numfac = $this->input->post("numfac");
	
		$proveedor = $this->input->post("proveedor");
		$descripcion = $this->input->post("descripcion");
		$tipomantenimiento_id = $this->input->post("tipomantenimiento");
	
		$idMantenimiento = $this->input->post("idMantenimiento");

		$data = array(
			"numfac" => $numfac,
			"proveedor" => $proveedor,
			"descripcion" => $descripcion,
			"tipomantenimiento_id" => $tipomantenimiento_id,
			"vehiculo_id" => $idVehiculo,
			'fecha' => date("Y-m-d")

		);
		$vehiculo= $this->Vehiculos_model->getVehiculo($idVehiculo);

		if ($idMantenimiento!="") {
			if ($this->Vehiculos_model->updateMantenimiento($idMantenimiento,$data)) {

				$this->backend_lib->savelog($this->modulo,"Actualización del Mantenimiento al Vehiculo con placa ".$vehiculo->placa);
				$this->session->set_flashdata("success","El mantenimiento fue guardado exitosamente");
				redirect(base_url()."mantenimientos/vehiculos/".$idVehiculo);
			}else{
				$this->session->set_flashdata("error","El mantenimiento no ha sido guardado");
				redirect(base_url()."mantenimientos/vehiculos/".$idVehiculo);
			}
		}else{
			if ($this->Vehiculos_model->saveMantenimiento($data)) {
				$this->backend_lib->savelog($this->modulo,"Inserción de nuevo Mantenimiento para el Vehiculo con placa".$vehiculo->placa);
				$this->session->set_flashdata("success","El mantenimiento fue guardado exitosamente");
				redirect(base_url()."mantenimientos/vehiculos/".$idVehiculo);
			}else{
				$this->session->set_flashdata("error","El mantenimiento no ha sido guardado");
				redirect(base_url()."mantenimientos/vehiculos/".$idVehiculo);
			}
		}

		

	}

	public function getMantenimiento(){
		$id = $this->input->post("id");
		$mantenimiento = $this->Vehiculos_model->getMantenimiento($id);
		echo json_encode($mantenimiento);
	}

	public function getMantenimientos(){

		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$mantenimientos = $this->Mantenimientos_model->getMantenimientos($fechainicio,$fechafinal);
		}
		else{
			$mantenimientos = $this->Mantenimientos_model->getMantenimientos();
		}
		
		$contenido_interno = array(
			"mantenimientos" => $mantenimientos,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/mantenimientos/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function savetipo(){
		$nombre = $this->input->post("nombre");
		$data = array(
			 "nombre" => $nombre
		);
		if ($this->Mantenimientos_model->saveTipo($data)) {
			$this->session->set_flashdata("success","Se registro exitosamente el nuevo tipo de mantenimiento");
		}else{
			$this->session->set_flashdata("error","Hubo un error al intentar registrar nuevo tipo de mantenimiento");
		}

		redirect($this->agent->referrer());

	}


}