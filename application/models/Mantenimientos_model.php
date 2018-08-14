<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mantenimientos_model extends CI_Model {

	public function getMantenimientos($fechainicio = false, $fechafinal = false){
		$this->db->select("m.*,v.placa,tm.nombre");
		$this->db->from("mantenimientos m");
		$this->db->join("vehiculos v", "m.vehiculo_id = v.id");
		$this->db->join("tipo_mantenimientos tm", "m.tipomantenimiento_id = tm.id");
		if ($fechainicio !== false && $fechafinal !== false) {
			$this->db->where("m.fecha >=", $fechainicio);
			$this->db->where("m.fecha <=", $fechafinal);


		}
		$this->db->order_by("m.fecha");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function saveTipo($data){
		return $this->db->insert("tipo_mantenimientos",$data);
	}
}