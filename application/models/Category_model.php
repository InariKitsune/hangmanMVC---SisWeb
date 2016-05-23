<?php
class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getCategories()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	public function createCategory($categoryName)
	{
		$data = array(
			'name' => $categoryName
		);
		$this->db->insert('category', $data);
		return $this->db->insert_id();
	}
}
?>