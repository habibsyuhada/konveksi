<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('general_mod');
	}

	public function index(){
		redirect('shop/list');
	}

	public function list(){
		$data['subview'] 			= 'shop/list';
		$data['meta_title'] 	= 'Shop';
		$this->load->view('index', $data);
	}

	public function detail($code){
		$code = (int)$code;

		$datadb = $this->general_mod->product_list_db(['id' => $code]);
		$product = $datadb[0];

		$datadb = $this->general_mod->product_list_db(['id !=' => $code]);
		$suggest_product = $datadb;

		$data['product'] = $product;
		$data['suggest_product'] = $suggest_product;

		$data['subview'] 			= 'shop/detail';
		$data['meta_title'] 	= 'Shop';
		$this->load->view('index', $data);
	}
}
