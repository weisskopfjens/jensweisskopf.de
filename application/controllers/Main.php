<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){
		// Pass the data to view
		$this->load->view('main');
	}
}
