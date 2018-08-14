<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos extends CI_Controller {
	private $modulo = "Vehiculos";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Empresas_model");
		$this->load->model("Vehiculos_model");
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$vehiculos = $this->Vehiculos_model->getVehiculos(false,$fechainicio,$fechafinal);
		}
		else{
			$vehiculos = $this->Vehiculos_model->getVehiculos();
		}

		$contenido_interno = array(
			"vehiculos" => $vehiculos,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/vehiculos/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function add(){
		$contenido_interno = array(
			"empresas" => $this->Empresas_model->getEmpresas("1"),
		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/vehiculos/add",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}


	public function store(){
		if ($this->input->post("guardar")) {
			$placa = $this->input->post("placa");
			$numero = $this->input->post("numero");
			$tarjeta = $this->input->post("tarjeta");
			$kilometraje = $this->input->post("kilometraje");
			$empresa_id = $this->input->post("empresa_id");
			$chasis = $this->input->post("chasis");
			$motor = $this->input->post("motor");
			$modelo = $this->input->post("modelo");
			$ruta = $this->input->post("ruta");
			$marca = $this->input->post("marca");
			$soat = $this->input->post("soat");
			$fec_soat = $this->input->post("fec_soat");
			$fec_revision = $this->input->post("fec_revision");
			$num_seguros = $this->input->post("num_seguros");
			$fec_seguros = $this->input->post("fec_seguros");
			$fec_extintor = $this->input->post("fec_extintor");
			$propietario = $this->input->post("propietario");
			$data = array(
				"placa" => $placa,
				"numero" => $numero,
				"tarjeta" => $tarjeta,
				"kilometraje" => $kilometraje,
				"empresa_id" => $empresa_id,
				"fecha" => date('Y-m-d H:i:s'),
				"marca" => $marca,
				"modelo" => $modelo,
				"chasis" => $chasis,
				"ruta" => $ruta,
				"motor" => $motor,
				"estado" => 1,
				"soat" => $soat,
				"fec_soat" => $fec_soat,
				"fec_revision" => $fec_revision,
				"num_seguros" => $num_seguros,
				"fec_seguros" => $fec_seguros,
				"fec_extintor" => $fec_extintor,
				"propietario" => $propietario,
			);

			if ($this->Vehiculos_model->save($data)) 
			{
				$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
				$this->backend_lib->savelog($this->modulo,"Inserción de nuevo Vehiculo con placa ".$placa);
				redirect(base_url()."ingresos/vehiculos/add");

			} else {
				$this->session->set_flashdata("error", "Los datos no fueron guardados");
				redirect(base_url()."ingresos/vehiculos/add");
			}
		}
	}	

	public function view(){
		$id = $this->input->post("id");

		$data = array(
			"vehiculo" => $this->Vehiculos_model->getVehiculo($id),
			"soat" => $this->Vehiculos_model->ultimoMantenimiento($id,1),
			"revision" => $this->Vehiculos_model->ultimoMantenimiento($id,2),
			"seguros" => $this->Vehiculos_model->ultimoMantenimiento($id,3),
			"aceite" => $this->Vehiculos_model->ultimoMantenimiento($id,4),
			"sincro" => $this->Vehiculos_model->ultimoMantenimiento($id,5),
			"alinea" => $this->Vehiculos_model->ultimoMantenimiento($id,6),
			"llantas" => $this->Vehiculos_model->ultimoMantenimiento($id,7),
			"extintor" => $this->Vehiculos_model->ultimoMantenimiento($id,8),

		);

		$this->load->view("admin/vehiculos/view", $data);
	}

	public function delete(){
		$id = $this->input->post("id");
		$vehiculo = $this->Vehiculos_model->getVehiculo($id);
		$data = array(
			"estado" => "0"
		);

		$this->Vehiculos_model->update($id, $data);
		$this->backend_lib->savelog($this->modulo,"Eliminación del Vehiculo con placa ".$vehiculo->placa);

		echo "reportes/vehiculos";
	}

	public function edit($id){
		$contenido_interno = array(
			"vehiculo" => $this->Vehiculos_model->getVehiculo($id),
			"empresas" => $this->Empresas_model->getEmpresas("1"),
		);

		$contenido_externo = array(
			"contenido" => $this->load->view("admin/vehiculos/edit",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}


	public function update(){
		$idVehiculo = $this->input->post("idVehiculo");
		$placa = $this->input->post("placa");
		$numero = $this->input->post("numero");
		$tarjeta = $this->input->post("tarjeta");
		$kilometraje = $this->input->post("kilometraje");
		$empresa_id = $this->input->post("empresa_id");
		$chasis = $this->input->post("chasis");
		$motor = $this->input->post("motor");
		$modelo = $this->input->post("modelo");
		$ruta = $this->input->post("ruta");
		$marca = $this->input->post("marca");
		$soat = $this->input->post("soat");
		$fec_soat = $this->input->post("fec_soat");
		$fec_revision = $this->input->post("fec_revision");
		$num_seguros = $this->input->post("num_seguros");
		$fec_seguros = $this->input->post("fec_seguros");
		$fec_extintor = $this->input->post("fec_extintor");
		$propietario = $this->input->post("propietario");
		$estado = 1;

		if ($this->input->post("estado") ) {
			if ($this->input->post("estado") == 1) {
				$estado = 1;
			}else{
				$estado = 0;
			}
			
		}

		
	
		$data = array(
			"placa" => $placa,
			"numero" => $numero,
			"tarjeta" => $tarjeta,
			"kilometraje" => $kilometraje,
			"empresa_id" => $empresa_id,
			"fecha" => date('Y-m-d H:i:s'),
			"estado" => $estado,
			"marca" => $marca,
			"modelo" => $modelo,
			"chasis" => $chasis,
			"ruta" => $ruta,
			"motor" => $motor,
			"soat" => $soat,
			"fec_soat" => $fec_soat,
			"fec_revision" => $fec_revision,
			"num_seguros" => $num_seguros,
			"fec_seguros" => $fec_seguros,
			"fec_extintor" => $fec_extintor,
			"propietario" => $propietario,
		);

		if ($this->Vehiculos_model->update($idVehiculo,$data)) 
		{
			$this->backend_lib->savelog($this->modulo,"Actualización del Vehiculo con placa ".$placa);
			$this->session->set_flashdata("success", "Los datos fueron guardados exitosamente");
			redirect(base_url()."reportes/vehiculos");
		} else {
			$this->session->set_flashdata("error", "Los datos no fueron guardados");
			redirect(base_url()."ingresos/vehiculos/edit/".$idVehiculo);
		}
	}
}