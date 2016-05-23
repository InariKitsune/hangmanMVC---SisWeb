<?php
class Category extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();		
		$this->load->model('word_model');
	}
	public function index()
	{
		$categoryId = $_GET["id"];
		$data['words'] = $this->word_model->getWords($categoryId);
		$data['cID'] = $categoryId;		
		$this->load->view("category/index", $data);
	}
	public function create()
	{
		$ThisCategoryId = $_GET["id"];
		$newWord = $this->input->post('newWordTextBox');		
		$lastId = $this->word_model->createWord($newWord, $ThisCategoryId);
		$this->load->helper('url');
		redirect('category?id=' . $ThisCategoryId);
	}
	public function delete()
	{		
		$ThisWordId = $_GET["id"];
		$this->word_model->deleteWord($ThisWordId);				
		$this->load->helper('url');
		redirect('categories');
	}
}
?>