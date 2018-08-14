<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductores extends CI_Controller {
	private $modulo = "Conductores";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Conductores_model");
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$conductores = $this->Conductores_model->getConductores(false,$fechainicio,$fechafinal);
		}
		else{
			$conductores = $this->Conductores_model->getConductores();
		}

		$contenido_interno = array(
			"conductores" => $conductores,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/conductores/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function add(){
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/conductores/add","",TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function store(){
		if ($this->input->post("guardar")) {
			$documento = $this->input->post("documento");
			$nombres = $this->input->post("nombres");
			$apellidos = $this->input->post("apellidos");
			$direccion = $this->input->post("direccion");
			$telefono = $this->input->post("telefono");
			$correo = $this->input->post("correo");
			$num_licencia = $this->input->post("num_licencia");
			$cat_licencia = $this->input->post("cat_licencia");
			$fec_licencia = $this->input->post("fec_licencia");

			$this->form_validation->set_rules("documento","Numero de Documento","required|is_unique[conductores.documento]", array('is_unique' => 'El %s ingresado ya esta en uso.'));
			if (!empty($correo)) {
				$this->form_validation->set_rules("correo","Correo electronico","required|is_unique[conductores.correo]", array('is_unique' => 'El %s ingresado ya esta en uso.'));
			}
			

			if ($this->form_validation->run() == false) {

				$this->add();
				
			}else{

				$this->load->library('upload');

				if (!empty($_FILES['foto']['name']))
		        {
		            // Configuración para el Archivo 1
		            $config['upload_path'] = './uploads/images/';
		            $config['allowed_types'] = 'gif|jpg|png';

		            // Cargamos la configuración del Archivo 1
		            $this->upload->initialize($config);

		            // Subimos archivo 1
		            if ($this->upload->do_upload('foto'))
		            {
		                $data = array("upload_data"=>$this->upload->data());
		                $foto = $data["upload_data"]["file_name"];
		            }
		            else
		            {
		                echo $this->upload->display_errors();
		            }


		        }else{
		        	$foto = "";
		        }

		        if (!empty($_FILES['hoja']['name']))
	        	{
		            // La configuración del Archivo 2, debe ser diferente del archivo 1
		            // si configuras como el Archivo 1 no hará nada
		            $config['upload_path'] = './uploads/pdfs/';
		            $config['allowed_types'] = 'pdf';

		            // Cargamos la nueva configuración
		            $this->upload->initialize($config);

		            // Subimos el segundo Archivo
		            if ($this->upload->do_upload('hoja'))
		            {
		                $data = array("upload_data"=>$this->upload->data());
		                $pdf = $data["upload_data"]["file_name"];
		            }
		            else
		            {
		                echo $this->upload->display_errors();
		            }

	        	}else{
	        		$pdf = "";
	        	}

				

				$data = array(
					"documento" => $documento,
					"nombres" => $nombres,
					"apellidos" => $apellidos,
					"direccion" => $direccion,
					"telefono" => $telefono,
					"correo" => $correo,
					"foto" => $foto,
					"hoja" => $pdf,
					"fecha" => date('Y-m-d H:i:s'),
					"estado" => 1,
					"num_licencia" => $num_licencia,
					"cat_licencia" => $cat_licencia,
					"fec_licencia" => $fec_licencia,
				);

				if ($this->Conductores_model->save($data)) {
					$this->backend_lib->savelog($this->modulo,"Inserción de nuevo Coductor con documento ".$documento);
					$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
					redirect(base_url()."ingresos/conductores/add");
				} else {
					$this->session->set_flashdata("error", "Los datos no fueron guardados");
					redirect(base_url()."ingresos/conductores/add");

				}



			}
			
		} else {
			redirect(base_url()."ingresos/conductores/add");
		}
		
	}

	public function view(){
		$id = $this->input->post("id");

		$data = array(
			"conductor" => $this->Conductores_model->getConductor($id)
		);

		$this->load->view("admin/conductores/view", $data);
	}
	public function delete(){
		$id = $this->input->post("id");
		$conductor = $this->Conductores_model->getConductor($id);
		$data = array(
			"estado" => "0"
		);

		$this->Conductores_model->update($id, $data);
		$this->backend_lib->savelog($this->modulo,"Eliminación del Conductor con documento ".$conductor->documento);

		echo "reportes/conductores";
	}
	public function edit($id){
		$contenido_interno = array(
			"conductor" => $this->Conductores_model->getConductor($id)
		);

		$contenido_externo = array(
			"contenido" => $this->load->view("admin/conductores/edit",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function update(){
		$idConductor = $this->input->post("idConductor");
		$documento = $this->input->post("documento");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$direccion = $this->input->post("direccion");
		$telefono = $this->input->post("telefono");
		$correo = $this->input->post("correo");
		$num_licencia = $this->input->post("num_licencia");
			$cat_licencia = $this->input->post("cat_licencia");
			$fec_licencia = $this->input->post("fec_licencia");

		$estado = 1;

		if ($this->input->post("estado") ) {
			if ($this->input->post("estado") == 1) {
				$estado = 1;
			}else{
				$estado = 0;
			}
			
		}

		$conductoractual = $this->Conductores_model->getConductor($idConductor);
		$is_unique_documento = "";
		if ($conductoractual->documento != $documento) {
			$is_unique_documento = "|is_unique[conductores.documento]";
		}


		$this->form_validation->set_rules("documento","Numero de Documento","required".$is_unique_documento, array('is_unique' => 'El %s ingresado ya esta en uso.'));
		if (!empty($correo)) {
			$is_unique_correo = "";
			if ($conductoractual->correo != $correo) {
				$is_unique_correo = "|is_unique[conductores.correo]";
			}
			$this->form_validation->set_rules("correo","Correo electronico","required".$is_unique_correo, array('is_unique' => 'El %s ingresado ya esta en uso.'));
		}
		

		if ($this->form_validation->run() == false) {

			$this->add();
			
		}else{

			$this->load->library('upload');

			if (!empty($_FILES['foto']['name']))
	        {
	            // Configuración para el Archivo 1
	            $config['upload_path'] = './uploads/images/';
	            $config['allowed_types'] = 'gif|jpg|png';

	            // Cargamos la configuración del Archivo 1
	            $this->upload->initialize($config);

	            // Subimos archivo 1
	            if ($this->upload->do_upload('foto'))
	            {
	                $data = array("upload_data"=>$this->upload->data());
	                $foto = $data["upload_data"]["file_name"];
	            }
	            else
	            {
	                echo $this->upload->display_errors();
	            }


	        }else{
	        	$foto = "";
	        }

	        if (!empty($_FILES['hoja']['name']))
        	{
	            // La configuración del Archivo 2, debe ser diferente del archivo 1
	            // si configuras como el Archivo 1 no hará nada
	            $config['upload_path'] = './uploads/pdfs/';
	            $config['allowed_types'] = 'pdf';

	            // Cargamos la nueva configuración
	            $this->upload->initialize($config);

	            // Subimos el segundo Archivo
	            if ($this->upload->do_upload('hoja'))
	            {
	                $data = array("upload_data"=>$this->upload->data());
	                $pdf = $data["upload_data"]["file_name"];
	            }
	            else
	            {
	                echo $this->upload->display_errors();
	            }

        	}else{
        		$pdf = "";
        	}

			

			$data = array(
				"documento" => $documento,
				"nombres" => $nombres,
				"apellidos" => $apellidos,
				"direccion" => $direccion,
				"telefono" => $telefono,
				"correo" => $correo,
				"foto" => $foto,
				"hoja" => $pdf,
				"fecha" => date('Y-m-d H:i:s'),
				"estado" => $estado,
				"num_licencia" => $num_licencia,
				"cat_licencia" => $cat_licencia,
				"fec_licencia" => $fec_licencia,
			);

			if ($this->Conductores_model->update($idConductor,$data)) {
				$this->backend_lib->savelog($this->modulo,"Actualización del Conductor con documento ".$documento);

				$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
				redirect(base_url()."reportes/conductores");
			} else {
				$this->session->set_flashdata("error", "Los datos no fueron guardados");
				redirect(base_url()."ingresos/conductores/edit/".$idConductor);

			}



		}
	}


}