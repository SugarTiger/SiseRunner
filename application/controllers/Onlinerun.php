<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlinerun extends CI_Controller {
	public function index()
	{
		$this->load->view('index/xheader');
		$this->load->view('index/onlinerun');
	}
}