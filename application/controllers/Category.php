<?php
class Category extends CI_Controller
{	
	public $categoryId;
	public function __construct()
	{
		parent::__construct();
		$this->categoryId = $_GET["id"];
		$this->load->model('word_model');
	}
	public function index()
	{
		$data['words'] = $this->word_model->getWords($this->categoryId);
		$data['cID'] = $this->categoryId;		
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
}
?>