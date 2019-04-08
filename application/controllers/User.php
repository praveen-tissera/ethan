<?php
Class User extends CI_Controller {
    public function __construct() {
		parent::__construct();
		// Load form validation library
    $this->load->library('form_validation');
    $this->load->helper('url');
		$this->load->model('User_model');
		
		
    } 
    public function index(){
		$this->load->view('home');
    }

    public function getCategories(){
      //echo "categories works";
      $data['message'] = 'This is come for user controler';
      $result_catagories = $this->User_model->get_catagories();
      $data['all_catagories'] = $result_catagories;
      //print_r($result_catagories);
      //var_dump()
      $this->load->view('show_categories',$data);
      //$result_catagories =$this->User_model->get_catagories();
      //print_r($result_catagories);
      
      
      //print_r($data);
      //$this->load->view('food-menu',$data);
  }
  public function getForm(){
    $this->load->view('form');
  }
  public function fromSubmit(){
    $this->form_validation->set_rules('school', 'School', 'trim|required');
    $this->form_validation->set_rules('address', 'Home Address', 'trim|required');
    if($this->form_validation->run() == FALSE){
      $this->load->view('form');
    }else{
      print_r($_POST);
    }
  }
}