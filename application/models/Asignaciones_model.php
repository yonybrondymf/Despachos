<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaciones_model extends CI_Model {


	public function save($data){
		return $this->db->insert("asignaciones",$data);
	}

	public function conductoresBus($idvehiculo){
		$this->db->select("c.*");
		$this->db->from("asignaciones a");
		$this->db->join("conductores c", "a.conductor_id = c.id");
		$this->db->where("a.vehiculo_id", $idvehiculo);
		$resultados = $this->db->get();
		return $resultados->result();

	}


}