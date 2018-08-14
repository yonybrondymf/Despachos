<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vehiculos_model extends CI_Model {

	public function getVehiculos($estado = false, $fechainicio = false, $fechafinal = false){
		$this->db->select("v.*,e.nombre as empresa");
		$this->db->from("vehiculos v");
		$this->db->join("empresas e", "v.empresa_id = e.id");
		if ($estado !== false) {
			$this->db->where("v.estado", "1");
		}
		if ($fechainicio !== false && $fechafinal !== false) {
			$this->db->where("v.fecha >=", $fechainicio." "."00:00:00");
			$this->db->where("v.fecha <=", $fechafinal." "."23:59:59");


		}
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function save($data){
		return $this->db->insert("vehiculos",$data);
	}

	public function saveDetalle($data){
		return $this->db->insert("detalle_vehiculo",$data);
	}

	public function getVehiculo($idvehiculo){
		$this->db->select("e.nombre as empresa,v.*");
		$this->db->from("vehiculos v");
		$this->db->join("empresas e","v.empresa_id = e.id");
		$this->db->where("v.id",$idvehiculo);
		$resultados = $this->db->get();
		return $resultados->row();
	}

	public function ultimoMantenimiento($idvehiculo, $idtipo){

		$this->db->where("vehiculo_id",$idvehiculo);
		$this->db->where("tipomantenimiento_id",$idtipo);
		$this->db->order_by("id", "DESC");
		$this->db->limit(1);
		$resultados = $this->db->get("mantenimientos");
		return $resultados->row();
	}

	public function update($id,$data){
		$this->db->where("id", $id);
		return $this->db->update("vehiculos",$data);
	}

	public function updateMantenimiento($id,$data){
		$this->db->where("id", $id);
		return $this->db->update("mantenimientos",$data);
	}


	public function getMantenimientos($id){
		$this->db->select("m.*,v.placa,tm.nombre,p.nombre as proveedor");
		$this->db->from("mantenimientos m");
		$this->db->join("vehiculos v", "m.vehiculo_id = v.id");
		$this->db->join("tipo_mantenimientos tm", "m.tipomantenimiento_id = tm.id");
		$this->db->join("proveedores p", "m.proveedor = p.id");
		$this->db->where("m.vehiculo_id", $id);
		$resultados = $this->db->get();
		return $resultados->result();
	}
	public function getMantenimiento($id){

		$this->db->where("id", $id);
		$resultados = $this->db->get("mantenimientos");
		return $resultados->row();
	}
	public function getTipoMantenimientos(){

		$resultados = $this->db->get("tipo_mantenimientos");
		return $resultados->result();
	}

	public function saveMantenimiento($data){
		return $this->db->insert("mantenimientos",$data);
	}



}