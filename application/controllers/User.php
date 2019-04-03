<?php
Class User extends CI_Controller {
    public function __construct() {
		parent::__construct();
		// Load form helper library
		$this->load->helper('form');
		// Load form validation library
		$this->load->library('form_validation');
		// Load session library
		$this->load->library('session');
		//load url library
		$this->load->helper('url');
		// Load database
		$this->load->model('User_model');
		
		date_default_timezone_set("Asia/colombo");
	//	$this->load->model('user_model');
	
		$this->load->library('upload');
		
    } 
    public function index(){
		$this->load->view('home');
    }

    public function getCategories(){
		
		//$result_catagories =$this->User_model->get_catagories();
		//print_r($result_catagories);
		
		
		//print_r($data);
		//$this->load->view('food-menu',$data);
	}
}