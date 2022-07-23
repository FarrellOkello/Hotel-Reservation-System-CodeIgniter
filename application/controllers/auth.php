<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public  function __construct(){
        parent::__construct();               
    }
    
public function signup(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		if($this->form_validation->run()){
			$this->load->model('queries');
			$data = $this->input->post();
			  unset($data['submit']);
			// echo 'success';
			if($this->queries->register($data)){
				$this->session->set_flashdata('response','Registered successfully!');

			}else{
				$this->session->set_flashdata('response','Registeration failed!');
			}
			return redirect('welcome');
		} else{
			// return $this->index();
			echo validation_errors();
		}
	}