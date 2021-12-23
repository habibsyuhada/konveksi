<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->model('general_mod');
	}

	public function index(){
		redirect('home/home');
	}

	public function home(){
		$data['product_list'] = $this->general_mod->product_list_db();
		$datadb = $this->general_mod->category_list_db();
		$category_list = [];
		foreach ($datadb as $key => $value) {
			$category_list[$value['id']] = $value['name'];
		}
		$data['category_list'] = $category_list;

		$data['subview'] 			= 'home/home';
		$data['meta_title'] 	= 'Home';
		$this->load->view('index', $data);
	}
}
