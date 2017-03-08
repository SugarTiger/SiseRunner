<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		$data['name'] = array(
			'服饰1',
			'服饰2',
			'服饰3',
			'服饰4',
			'服饰5'
		);//数据
		$this->load->view('test.html',$data);
	}
}
