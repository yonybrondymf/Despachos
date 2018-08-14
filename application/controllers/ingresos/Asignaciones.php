<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaciones extends CI_Controller {
	private $modulo = "Asignaciones";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Asignaciones_model");
		$this->load->model("Vehiculos_model");
		$this->load->model("Conductores_model");
	}

	public function index()
	{
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/dashboard","",TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function add(){
		$contenido_interno = array(
			"vehiculos" => $this->Vehiculos_model->getVehiculos("1"),
			"conductores" => $this->Conductores_model->getConductores("1"),

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/asignaciones/add",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function store(){
		if ($this->input->post("guardar")) {
			$conductor_id = $this->input->post("conductor_id");
			$vehiculo_id = $this->input->post("vehiculo_id");

			$data = array(
				"conductor_id" => $conductor_id,
				"vehiculo_id" => $vehiculo_id,
				"fecha" => date('Y-m-d H:i:s')
			);

			$vehiculo = $this->Vehiculos_model->getVehiculo($vehiculo_id);
			$conductor = $this->Conductores_model->getConductor($conductor_id);

			if ($this->Asignaciones_model->save($data)) {
				$this->backend_lib->savelog($this->modulo,"Inserción de nueva Asignaciones del Conductor ".$conductor->documento."  con el Vehiculo ".$vehiculo->placa);
				$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
				redirect(base_url()."ingresos/asignaciones/add");
			} else {
				$this->session->set_flashdata("error", "Los datos no fueron guardados");
				redirect(base_url()."ingresos/asignaciones/add");

			}
		} else {
			redirect(base_url()."ingresos/asignaciones/add");
		}
		
	}

}