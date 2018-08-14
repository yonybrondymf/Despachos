<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
		$this->load->model("Vehiculos_model");
		$this->load->model("Alistamientos_model");
	}

	public function index()
	{
		$fecha = date('Y-m-d');
        $nuevafecha = strtotime ( '+30 day' , strtotime ( $fecha ) ) ;
        $nuevafecha = date ( 'Y-m-d' , $nuevafecha );

		$contenido_interno = array(
			"tarjetas" => $this->Backend_model->getTarjetas($nuevafecha),
			"revisiones" => $this->Backend_model->getRevisiones($nuevafecha),
			"soats" => $this->Backend_model->getSoats($nuevafecha),
			"licencias" => $this->Backend_model->getLicencias($nuevafecha),
			"extintores" => $this->Backend_model->getExtintores($nuevafecha),
			"aprobados" => $this->Backend_model->getAlistamientos("1",date("Y-m-d")),
			"desaprobados" => $this->Backend_model->getAlistamientos("2",date("Y-m-d")),
		);
		$contenido_externo = array(
			"contenido" => $this->load->view("admin/dashboard",$contenido_interno,TRUE)
		);
		$this->load->view('admin/template', $contenido_externo);
	}

}