<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function index() {
		$this->load->view('layouts/header');
		$this->load->view('layouts/nav');
		$this->load->view('layouts/main');
		$this->load->view('layouts/footer');
	}
}
