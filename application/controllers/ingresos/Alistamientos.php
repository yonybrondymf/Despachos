<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alistamientos extends CI_Controller {
	private $modulo = "Alistamientos";
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Usuarios_model");
		$this->load->model("Vehiculos_model");
		$this->load->model("Conductores_model");
		$this->load->model("Asignaciones_model");
		$this->load->model("Alistamientos_model");
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafinal = $this->input->post("fechafinal");

		if ($this->input->post("buscar")) {
			$alistamientos = $this->Alistamientos_model->getAlistamientos($fechainicio,$fechafinal);
		}
		else{
			$alistamientos = $this->Alistamientos_model->getAlistamientos();
		}

		$contenido_interno = array(
			"alistamientos" => $alistamientos,
			"fechainicio" => $fechainicio,
			"fechafinal" => $fechafinal

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/alistamientos/list",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);

	}

	public function add(){
		$contenido_interno = array(
			"vehiculos" => $this->Vehiculos_model->getVehiculos(),
			"conductores" => $this->Conductores_model->getConductores(),

		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/alistamientos/add",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

	public function infoVehiculo(){
		$idvehiculo = $this->input->post("id");
		$data = array(
			"vehiculo" => $this->Vehiculos_model->getVehiculo($idvehiculo),
			"conductores" => $this->Asignaciones_model->conductoresBus($idvehiculo)
		);
		echo json_encode($data);
	}

	public function store(){
		$vehiculo_id = $this->input->post("vehiculo_id");
		$conductor_id = $this->input->post("conductor_id");
		$licencia_chk = $this->input->post("licencia_chk");
		$licencia_obs = $this->input->post("licencia_obs");
		$soat_chk = $this->input->post("soat_chk");
		$soat_obs = $this->input->post("soat_obs");
		$rtm_chk = $this->input->post("rtm_chk");
		$rtm_obs = $this->input->post("rtm_obs");
		$seguros_chk = $this->input->post("seguros_chk");
		$seguros_obs = $this->input->post("seguros_obs");
		$direcdelante_chk = $this->input->post("direcdelante_chk");
		$direcdelante_obs = $this->input->post("direcdelante_obs");
		$direcatras_chk = $this->input->post("direcatras_chk");
		$direcatras_obs = $this->input->post("direcatras_obs");
		$lucesaltas_chk = $this->input->post("lucesaltas_chk");
		$lucesaltas_obs = $this->input->post("lucesaltas_obs");
		$lucesbajas_chk = $this->input->post("lucesbajas_chk");
		$lucesbajas_obs = $this->input->post("lucesbajas_obs");
		$lucesstops_chk = $this->input->post("lucesstops_chk");
		$lucesstops_obs = $this->input->post("lucesstops_obs");
		$lucesreversa_chk = $this->input->post("lucesreversa_chk");
		$lucesreversa_obs = $this->input->post("lucesreversa_obs");
		$lucesparqueo_chk = $this->input->post("lucesparqueo_chk");
		$lucesparqueo_obs = $this->input->post("lucesparqueo_obs");

		$limpiabrizas_chk = $this->input->post("limpiabrizas_chk");
		$limpiabrizas_obs = $this->input->post("limpiabrizas_obs");
		$frenoprincipal_chk = $this->input->post("frenoprincipal_chk");
		$frenoprincipal_obs = $this->input->post("frenoprincipal_obs");
		$frenoemergencia_chk = $this->input->post("frenoemergencia_chk");
		$frenoemergencia_obs = $this->input->post("frenoemergencia_obs");
		$llantadelante_chk = $this->input->post("llantadelante_chk");
		$llantadelante_obs = $this->input->post("llantadelante_obs");
		$llantaatras_chk = $this->input->post("llantaatras_chk");
		$llantaatras_obs = $this->input->post("llantaatras_obs");
		$llantarepuesto_chk = $this->input->post("llantarepuesto_chk");
		$llantarepuesto_obs = $this->input->post("llantarepuesto_obs");

		$espejolateral_chk = $this->input->post("espejolateral_chk");
		$espejolateral_obs = $this->input->post("espejolateral_obs");
		$espejoretrovisor_chk = $this->input->post("espejoretrovisor_chk");
		$espejoretrovisor_obs = $this->input->post("espejoretrovisor_obs");
		$pito_chk = $this->input->post("pito_chk");
		$pito_obs = $this->input->post("pito_obs");
		$fluidofrenos_chk = $this->input->post("fluidofrenos_chk");
		$fluidofrenos_obs = $this->input->post("fluidofrenos_obs");

		$fluidoaceite_chk = $this->input->post("fluidoaceite_chk");
		$fluidoaceite_obs = $this->input->post("fluidoaceite_obs");
		$fluidorefrigera_chk = $this->input->post("fluidorefrigera_chk");
		$fluidorefrigera_obs = $this->input->post("fluidorefrigera_obs");
		$apoyadelante_chk = $this->input->post("apoyadelante_chk");
		$apoyadelante_obs = $this->input->post("apoyadelante_obs");
		$apoyaatras_chk = $this->input->post("apoyaatras_chk");
		$apoyaatras_obs = $this->input->post("apoyaatras_obs");
		$cinturon_chk = $this->input->post("cinturon_chk");
		$cinturon_obs = $this->input->post("cinturon_obs");
		$mantenaceite_chk = $this->input->post("mantenaceite_chk");
		$mantenaceite_obs = $this->input->post("mantenaceite_obs");
		$mantensincro_chk = $this->input->post("mantensincro_chk");
		$mantensincro_obs = $this->input->post("mantensincro_obs");
		$mantenalinea_chk = $this->input->post("mantenalinea_chk");
		$mantenalinea_obs = $this->input->post("mantenalinea_obs");
		$mantenllantas_chk = $this->input->post("mantenllantas_chk");
		$mantenllantas_obs = $this->input->post("mantenllantas_obs");
		$tecnomecanica_chk = $this->input->post("tecnomecanica_chk");
		$tecnomecanica_obs = $this->input->post("tecnomecanica_obs");
		$soatvencimiento_chk = $this->input->post("soatvencimiento_chk");
		$soatvencimiento_obs = $this->input->post("soatvencimiento_obs");
		$extintor_chk = $this->input->post("extintor_chk");
		$extintor_obs = $this->input->post("extintor_obs");
		$capaextintor_chk = $this->input->post("capaextintor_chk");
		$capaextintor_obs = $this->input->post("capaextintor_obs");
		$herramienta_chk = $this->input->post("herramienta_chk");
		$herramienta_obs = $this->input->post("herramienta_obs");
		$cruceta_chk = $this->input->post("cruceta_chk");
		$cruceta_obs = $this->input->post("cruceta_obs");
		$gato_chk = $this->input->post("gato_chk");
		$gato_obs = $this->input->post("gato_obs");

		$taco_chk = $this->input->post("taco_chk");
		$taco_obs = $this->input->post("taco_obs");
		$senales_chk = $this->input->post("senales_chk");
		$senales_obs = $this->input->post("senales_obs");
		$chaleco_chk = $this->input->post("chaleco_chk");
		$chaleco_obs = $this->input->post("chaleco_obs");
		$botiquin_chk = $this->input->post("botiquin_chk");
		$botiquin_obs = $this->input->post("botiquin_obs");
		$final_obs = $this->input->post("final_obs");
		$user_registro = $this->input->post("user_registro");

		$data = array(
			"vehiculo_id" => $vehiculo_id,
			"conductor_id" => $conductor_id,
			"licencia_chk" => $licencia_chk,
			"licencia_obs" => $licencia_obs,
			"soat_chk" => $soat_chk,
			"soat_obs" => $soat_obs,
			"rtm_chk" => $rtm_chk,
			"rtm_obs" => $rtm_obs,
			"seguros_chk" => $seguros_chk,
			"seguros_obs" => $seguros_obs,
			"direcdelante_chk" => $direcdelante_chk,
			"direcdelante_obs" => $direcdelante_obs,
			"direcatras_chk" => $direcatras_chk,
			"direcatras_obs" => $direcatras_obs,
			"lucesaltas_chk" => $lucesaltas_chk,
			"lucesaltas_obs" => $lucesaltas_obs,
			"lucesbajas_chk" => $lucesbajas_chk,
			"lucesbajas_obs" => $lucesbajas_obs,
			"lucesstops_chk" => $lucesstops_chk,
			"lucesstops_obs" => $lucesstops_obs,
			"lucesreversa_chk" => $lucesreversa_chk,
			"lucesreversa_obs" => $lucesreversa_obs,
			"lucesparqueo_chk" => $lucesparqueo_chk,
			"lucesparqueo_obs" => $lucesparqueo_obs,
			"limpiabrizas_chk" => $limpiabrizas_chk,
			"limpiabrizas_obs" => $limpiabrizas_obs,
			"frenoprincipal_chk" => $frenoprincipal_chk,
			"frenoprincipal_obs" => $frenoprincipal_obs,
			"frenoemergencia_chk" => $frenoemergencia_chk,
			"frenoemergencia_obs" => $frenoemergencia_obs,
			"llantadelante_chk" => $llantadelante_chk,
			"llantadelante_obs" => $llantadelante_obs,

			"llantaatras_chk" => $llantaatras_chk,
			"llantaatras_obs" => $llantaatras_obs,
			"llantarepuesto_chk" => $llantarepuesto_chk,
			"llantarepuesto_obs" => $llantarepuesto_obs,
			"espejolateral_chk" => $espejolateral_chk,
			"espejolateral_obs" => $espejolateral_obs,
			"espejoretrovisor_chk" => $espejoretrovisor_chk,
			"espejoretrovisor_obs" => $espejoretrovisor_obs,
			"pito_chk" => $pito_chk,
			"pito_obs" => $pito_obs,
			"fluidofrenos_chk" => $fluidofrenos_chk,
			"fluidofrenos_obs" => $fluidofrenos_obs,
			"fluidoaceite_chk" => $fluidoaceite_chk,
			"fluidoaceite_obs" => $fluidoaceite_obs,
			"fluidorefrigera_chk" => $fluidorefrigera_chk,
			"fluidorefrigera_obs" => $fluidorefrigera_obs,
			"apoyadelante_chk" => $apoyadelante_chk,
			"apoyadelante_obs" => $apoyadelante_obs,
			"apoyaatras_chk" => $apoyaatras_chk,
			"apoyaatras_obs" => $apoyaatras_obs,
			"cinturon_chk" => $cinturon_chk,
			"cinturon_obs" => $cinturon_obs,
			"mantenaceite_chk" => $mantenaceite_chk,
			"mantenaceite_obs" => $mantenaceite_obs,
			"mantensincro_chk" => $mantensincro_chk,
			"mantensincro_obs" => $mantensincro_obs,
			"mantenalinea_chk" => $mantenalinea_chk,
			"mantenalinea_obs" => $mantenalinea_obs,
			"mantenllantas_chk" => $mantenllantas_chk,
			"mantenllantas_obs" => $mantenllantas_obs,
			"tecnomecanica_chk" => $tecnomecanica_chk,
			"tecnomecanica_obs" => $tecnomecanica_obs,
			"soatvencimiento_chk" => $soatvencimiento_chk,
			"soatvencimiento_obs" => $soatvencimiento_obs,
			"extintor_chk" => $extintor_chk,
			"extintor_obs" => $extintor_obs,
			"capaextintor_chk" => $capaextintor_chk,
			"capaextintor_obs" => $capaextintor_obs,
			"herramienta_chk" => $herramienta_chk,
			"herramienta_obs" => $herramienta_obs,
			"cruceta_chk" => $cruceta_chk,
			"cruceta_obs" => $cruceta_obs,
			"gato_chk" => $gato_chk,
			"gato_obs" => $gato_obs,
			"taco_chk" => $taco_chk,
			"taco_obs" => $taco_obs,
			"senales_chk" => $senales_chk,
			"senales_obs" => $senales_obs,
			"chaleco_chk" => $chaleco_chk,
			"chaleco_obs" => $chaleco_obs,
			"botiquin_chk" => $botiquin_chk,
			"botiquin_obs" => $botiquin_obs,
			"final_obs" => $final_obs,
			"user_registro" => $user_registro,
			"estado" => 0,
			"fch_registro" => date("Y-m-d H:i:s")

		);
		$resp = $this->Alistamientos_model->save($data);
		if ($resp != false) {
			$this->backend_lib->savelog($this->modulo,"Inserción de nuevo Alistamiento con número ".$resp);
			$this->session->set_flashdata("success", "Se guardo la información");
			redirect(base_url()."ingresos/alistamientos/add");
		}else{
			$this->session->set_flashdata("error", "No se guardo la información");
			redirect(base_url()."ingresos/alistamientos/add");
		}


	}

	public function getAlistamiento(){
		$id = $this->input->post("id");
		$data = array(
			"alistamiento" => $this->Alistamientos_model->getAlistamiento($id)
		);

		$this->load->view("admin/alistamientos/view",$data);
	}

	public function cambiarEstado(){
		$id = $this->input->post("id");
		$estado = $this->input->post("estado");
		$msj = "No Aprobación";
		if ($estado == "1") {
			$msj = "Aprobación";
		}
		$data = array(
			"estado" => $estado,
			"user_aprueba" => $this->session->userdata("id"),
			"fch_updated" => date("Y-m-d H:i:s")
		);
		$this->Alistamientos_model->update($id, $data);

		$this->backend_lib->savelog($this->modulo,$msj." del Alistamiento N°".$id);
		echo "reportes/alistamientos";
	}

	public function aprobartodos(){
		$alistamientos = $this->Alistamientos_model->noaprobados();

		foreach ($alistamientos as $a) {
			$data = array(
				"estado" => 1,
				"user_aprueba" => $this->session->userdata("id"),
				"fch_updated" => date("Y-m-d H:i:s")
			);
			$this->Alistamientos_model->update($a->id, $data);
			$this->backend_lib->savelog($this->modulo,"Aprobación del Alistamiento N°".$a->id);
		}

		echo "reportes/alistamientos";

	}

}