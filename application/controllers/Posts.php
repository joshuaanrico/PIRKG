<?php 
	class Posts extends CI_Controller{
		public function index(){

			//Title page capital letter to begin with 
			$data['title'] = 'Latest Posts';

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
 ?>