<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guidance extends CI_Controller {
	public function index()
	{
		$this->load->view('guidance.php');
	}
}