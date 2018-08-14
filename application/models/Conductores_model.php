<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductores_model extends CI_Model {

	public function getConductores($estado = false,$fechainicio = false, $fechafinal = false){
		if ($fechainicio !== false && $fechafinal !== false) {
			$this->db->where("fecha >=", $fechainicio." "."00:00:00");
			$this->db->where("fecha <=", $fechafinal." "."23:59:59");

		}
		if ($estado !== false) {
			$this->db->where("estado","1");
		}
		$resultados = $this->db->get("conductores");
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("conductores",$data);
	}



	public function login($email, $password){
		$this->db->where("email", $email);
		$this->db->where("password", $password);
		$this->db->where("estado","1");

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}

	public function getConductor($id){
		$this->db->where("id",$id);
		$resultados = $this->db->get("conductores");
		return $resultados->row();
	}
	public function update($id,$data){
		$this->db->where("id", $id);
		return $this->db->update("conductores",$data);
	}
}