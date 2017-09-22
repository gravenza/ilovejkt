<?php
class Knowledgebase extends CI_Controller{

	public function __construct(){
		parent::__construct();
	}
	
	public function howToOrder(){
	
		$this->load->view('knowledge');
	}
	
	public function ourNetwork(){
	
		$this->load->view('knowledge');
	}
}