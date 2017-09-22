<?php
class Product extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('product');
	}
	
	public function detail(){
		$this->load->view('product-detail');
	}
}