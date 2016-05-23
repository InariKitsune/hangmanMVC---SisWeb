<?php
class Word_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function getWords($id)
	{
		$query = $this->db->get_where('word', array('categoryId' => $id));
		return $query->result_array();
	}	
	public function createWord($wordText, $id)
	{
		$data = array(
			'text' => $wordText,
			'categoryId' => $id
		);
		$this->db->insert('word', $data);
		return $this->db->insert_id();
	}
	public function deleteWord($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('word');
	}
}
?>