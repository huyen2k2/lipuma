<?php 

	class search extends DController{
		
		public function __construct(){

			$data = array();
			parent::__construct();

		}
		public function index(){
			$this->search();
		}

		public function search(){
			Session::init();
			$table = 'tbl_product';

			$categorymodel = $this->load->model('categorymodel');


			$title = $_GET['search'] ? $_GET['search'] : '';

			$data = $categorymodel->found_products($table, $title);
			
			$this->load->view('header');
			//$this->load->view('slider');
			$this->load->view('search', $data);
			$this->load->view('footer');

		}
	}


?>