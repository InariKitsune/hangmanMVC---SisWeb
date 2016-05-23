<?php
class Categories extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}
	public function index()
	{
		$data['categories'] = $this->category_model->getCategories(); 
		$this->load->view("categories/index", $data);
	}
	public function create()
	{
		$newCategoryName = $this->input->post('newCategoryTextBox');
		$lastId = $this->category_model->createCategory($newCategoryName);
		$this->load->helper('url');
		redirect('categories');
	}
}
?>