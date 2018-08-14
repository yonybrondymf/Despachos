<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresas extends CI_Controller {
	private $modulo = "Empresas";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Empresas_model");
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$empresas = $this->Empresas_model->getEmpresas(false,$fechainicio,$fechafinal);
		}
		else{
			$empresas = $this->Empresas_model->getEmpresas();
		}

		$contenido_interno = array(
			"empresas" => $empresas,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/empresas/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function add(){
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/empresas/add","",TRUE)
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


			$this->form_validation->set_rules("nit","NIT","required|is_unique[empresas.nit]", array('is_unique' => 'El %s ingresado ya esta en uso.'));

			if ($this->form_validation->run() == false) {

				$this->add();
				
			}else{
				$config['upload_path']   = './assets/images/empresas/';
		        $config['allowed_types'] = 'gif|jpg|png';

		        $this->load->library('upload', $config);

		        $imagen = "";

		        if (!$this->upload->do_upload('file'))
		        {
		            $imagen = "";
		        }
		        else
		        {
		            $data = array(
		            	'upload_data' => $this->upload->data()
		            );

		            $imagen = $data["upload_data"]["file_name"];
		           
		        }

				$data = array(
					"nit" => $nit,
					"nombre" => $nombre,
					"direccion" => $direccion,
					"telefono" => $telefono,
					"correo" => $correo,
					"fecha" => date('Y-m-d H:i:s'),
					"estado" => 1,
					"logo" => $imagen 
				);

				if ($this->Empresas_model->save($data)) {
					$this->backend_lib->savelog($this->modulo,"Inserción de nueva Empresa con NIT ".$nit);
					$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
					redirect(base_url()."ingresos/empresas/add");
				} else {
					$this->session->set_flashdata("error", "Los datos no fueron guardados");
					redirect(base_url()."ingresos/empresas/add");

				}
			}

			
		} else {
			redirect(base_url()."ingresos/empresas/add");
		}
		
	}

	public function view(){
		$id = $this->input->post("id");

		$data = array(
			"empresa" => $this->Empresas_model->getEmpresa($id)
		);

		$this->load->view("admin/empresas/view", $data);
	}
	public function delete(){
		$id = $this->input->post("id");
		$empresa = $this->Empresas_model->getEmpresa($id);
		$data = array(
			"estado" => "0"
		);

		$this->Empresas_model->update($id, $data);
		$this->backend_lib->savelog($this->modulo,"Eliminación de la Empresa con NIT ".$empresa->nit);
		echo "reportes/empresas";
	}

	public function edit($id){
		$contenido_interno = array(
			"empresa" => $this->Empresas_model->getEmpresa($id)
		);

		$contenido_externo = array(
			"contenido" => $this->load->view("admin/empresas/edit",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function update(){
		$id = $this->input->post("idEmpresa");
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

		$empresaactual = $this->Empresas_model->getEmpresa($id);
		$is_unique = "";
		if ($empresaactual->nit != $nit) {
			$is_unique = "|is_unique[empresas.nit]";
		}

		$this->form_validation->set_rules("nit","NIT","required".$is_unique, array('is_unique' => 'El %s ingresado ya esta en uso.'));

		if ($this->form_validation->run() == false) {

			$this->add();
			
		}else{

			$config['upload_path']   = './assets/images/empresas/';
	        $config['allowed_types'] = 'gif|jpg|png';

	        $this->load->library('upload', $config);

	        $imagen = "";

	        if (!$this->upload->do_upload('file'))
	        {
	            $imagen = $empresaactual->logo;
	        }
	        else
	        {
	            $data = array(
	            	'upload_data' => $this->upload->data()
	            );

	            $imagen = $data["upload_data"]["file_name"];
	           
	        }

			$data = array(
				"nit" => $nit,
				"nombre" => $nombre,
				"direccion" => $direccion,
				"telefono" => $telefono,
				"correo" => $correo,
				"fecha" => date('Y-m-d H:i:s'),
				"logo" => $imagen,
				"estado" => $estado
			);

			if ($this->Empresas_model->update($id, $data)) {
				$this->backend_lib->savelog($this->modulo,"Actualización de la Empresa con NIT ".$nit);
				$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
				redirect(base_url()."reportes/empresas");
			} else {
				$this->session->set_flashdata("error", "Los datos no fueron guardados");
				redirect(base_url()."ingresos/empresas/edit/".$id);

			}
		}
	}


}