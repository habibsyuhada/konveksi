<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function __construct() {
		parent::__construct();
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
		print_r($code);
		exit;

		$data['subview'] 			= 'shop/detail';
		$data['meta_title'] 	= 'Shop';
		$this->load->view('index', $data);
	}
}
