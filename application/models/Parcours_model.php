<?php
class Parcours_model extends CI_Model {
	public function __construct() {
		$this->load->database();
	}

	public function getParcours() {
		$query = $this->db->get('parcours');
		return $query->result_array();
	}
}

?>