<?php 
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			//Title page capital letter to begin with 
			$data['title'] = ucfirst($page);

			$data['pages'] = $this->page_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
 ?>