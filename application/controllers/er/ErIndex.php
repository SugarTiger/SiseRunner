<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErIndex extends CI_Controller {
	public function index()
	{
		$this->load->view('Er/index(NEW).html');
	}
}
