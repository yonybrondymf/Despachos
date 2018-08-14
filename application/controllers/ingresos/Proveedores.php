<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
	private $modulo = "Proveedores";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Proveedores_model");
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$proveedores = $this->Proveedores_model->getProveedores(false,$fechainicio,$fechafinal);
		}
		else{
			$proveedores = $this->Proveedores_model->getproveedores();
		}

		$contenido_interno = array(
			"proveedores" => $proveedores,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/proveedores/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function add(){
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/proveedores/add","",TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function store(){
		if ($this->input->post("guardar")) {
			$nit = $this->input->post("nit");
			$nombre = $this->input->post("nombre");
			$direccion = $this->input->post("direccion");
			$telefono = $this->input->post("telefono");
			$correo = $this->input->post("correo");


			$this->form_validation->set_rules("nit","NIT","required|is_unique[proveedores.nit]", array('is_unique' => 'El %s ingresado ya esta en uso.'));

			if ($this->form_validation->run() == false) {

				$this->add();
				
			}else{

				$data = array(
					"nit" => $nit,
					"nombre" => $nombre,
					"direccion" => $direccion,
					"telefono" => $telefono,
					"correo" => $correo,
					"fecha" => date('Y-m-d H:i:s'),
					"estado" => 1,
				);

				if ($this->Proveedores_model->save($data)) {
					$this->backend_lib->savelog($this->modulo,"Inserción de nuevo Proveedor con NIT ".$nit);
					$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
					redirect(base_url()."ingresos/proveedores/add");
				} else {
					$this->session->set_flashdata("error", "Los datos no fueron guardados");
					redirect(base_url()."ingresos/proveedores/add");

				}
			}

			
		} else {
			redirect(base_url()."ingresos/proveedores/add");
		}
		
	}

	public function view(){
		$id = $this->input->post("id");

		$data = array(
			"proveedor" => $this->Proveedores_model->getProveedor($id)
		);

		$this->load->view("admin/proveedores/view", $data);
	}
	public function delete(){
		$id = $this->input->post("id");
		$proveedor = $this->Proveedores_model->getProveedor($id);
		$data = array(
			"estado" => "0"
		);

		$this->Proveedores_model->update($id, $data);
		$this->backend_lib->savelog($this->modulo,"Eliminación del Proveedor con NIT ".$proveedor->nit);
		echo "reportes/proveedores";
	}

	public function edit($id){
		$contenido_interno = array(
			"proveedor" => $this->Proveedores_model->getProveedor($id)
		);

		$contenido_externo = array(
			"contenido" => $this->load->view("admin/proveedores/edit",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function update(){
		$id = $this->input->post("idProveedor");
		$nit = $this->input->post("nit");
		$nombre = $this->input->post("nombre");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$correo = $this->input->post("correo");
		$estado = 1;

		if ($this->input->post("estado") ) {
			if ($this->input->post("estado") == 1) {
				$estado = 1;
			}else{
				$estado = 0;
			}
			
		}

		$proveedoractual = $this->Proveedores_model->getProveedor($id);
		$is_unique = "";
		if ($proveedoractual->nit != $nit) {
			$is_unique = "|is_unique[proveedores.nit]";
		}

		$this->form_validation->set_rules("nit","NIT","required".$is_unique, array('is_unique' => 'El %s ingresado ya esta en uso.'));

		if ($this->form_validation->run() == false) {

			$this->add();
			
		}else{

			$data = array(
				"nit" => $nit,
				"nombre" => $nombre,
				"direccion" => $direccion,
				"telefono" => $telefono,
				"correo" => $correo,
				"fecha" => date('Y-m-d H:i:s'),
				"estado" => $estado
			);

			if ($this->Proveedores_model->update($id, $data)) {
				$this->backend_lib->savelog($this->modulo,"Actualización del Proveedor con NIT ".$nit);
				$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
				redirect(base_url()."reportes/proveedores");
			} else {
				$this->session->set_flashdata("error", "Los datos no fueron guardados");
				redirect(base_url()."ingresos/proveedores/edit/".$id);

			}
		}
	}


}