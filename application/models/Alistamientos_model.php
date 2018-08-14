<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alistamientos_model extends CI_Model {


	public function getAlistamientos($fecinicio=false, $fecfinal=false){
		$this->db->select("a.fch_registro, a.id, a.final_obs, v.numero,v.ruta,a.estado, c.nombres,c.apellidos, ua.nombres as aprueba, ua.firma as firma_a, ur.nombres as inspector, ur.firma as firma_i");
		$this->db->from("alistamientos a");
		$this->db->join("vehiculos v","a.vehiculo_id = v.id");
		$this->db->join("conductores c","a.conductor_id = c.id");
		$this->db->join("usuarios ur","a.user_registro = ur.id");
		$this->db->join("usuarios ua","a.user_aprueba = ua.id","left");
		if ($fecinicio !== false && $fecfinal !== false) {
			$this->db->where("a.fch_registro >=", $fecinicio." "."00:00:00");
			$this->db->where("a.fch_registro <=", $fecfinal." "."23:59:59");
		}
		/*if ($fecha !== false) {
			$this->db->where("a.fch_registro >=", $fecha." "."00:00:00");
			$this->db->where("a.fch_registro <=", $fecha." "."23:59:59");


		}
*/		$this->db->order_by("a.fch_registro","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function save($data){
		if ($this->db->insert("alistamientos",$data)) {
			return $this->db->insert_id();
		}else{
			return false;
		}
		

	}

	public function getAlistamiento($id){
		$this->db->select("a.*, v.*,e.nombre as empresa,e.logo, c.nombres,c.apellidos, c.documento,c.fec_licencia, ua.nombres as aprueba,ua.firma as firma_a,ua.cedula as cedula_a, ur.nombres as inspector,ur.firma as firma_i, ur.cedula as cedula_i");
		$this->db->from("alistamientos a");
		$this->db->join("vehiculos v","a.vehiculo_id = v.id");
		$this->db->join("empresas e","v.empresa_id = e.id");
		$this->db->join("conductores c","a.conductor_id = c.id");
		$this->db->join("usuarios ur","a.user_registro = ur.id");
		$this->db->join("usuarios ua","a.user_aprueba = ua.id","left");
		$this->db->where("a.id",$id);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
		
	}

	public function update($id,$data){
		$this->db->where("id", $id);
		return $this->db->update("alistamientos",$data);
	}

	public function noaprobados(){
		$this->db->where("estado",0);
		return $this->db->get("alistamientos")->result();
	}
}