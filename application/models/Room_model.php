<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Room_model extends CI_Model{
	function insert($data){
		return $this->db->insert('classRoom', $data);
	}
}