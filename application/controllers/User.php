<?php
Class User extends CI_Controller {
    public function __construct() {
		parent::__construct();
		
		$this->load->model('User_model');
		
		
    } 
    public function index(){
		$this->load->view('home');
    }

    public function getCategories(){
      //echo "categories works";
      $data['message'] = 'This is come for user controler';
      $result_catagories = $this->User_model->get_catagories();
      print_r($result_catagories);
      //var_dump()
      $this->load->view('show_categories',$data);
      //$result_catagories =$this->User_model->get_catagories();
      //print_r($result_catagories);
      
      
      //print_r($data);
      //$this->load->view('food-menu',$data);
	}
}