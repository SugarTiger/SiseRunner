<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * 前台默认控制器
 * */
class SiseRunHome extends CI_Controller {
	/*默认方法,载入首页*/
	public function index()
	{
		$this->load->view('index/SiseRunHome');
	}
	/*载入约跑页*/
	public function appointment(){
		$this->load->view('index/appointment.html');
	}
	/*载入健身指南页*/
	public function guidance(){
		$this->load->view('index/xheader');
		$this->load->view('index/guidance');
	}
	/*载入线上马拉松*/
	public function onlinerun(){
		$this->load->view('index/xheader');
		$this->load->view('index/onlinerun');
	}
	/*载入跑族详情*/
	public function about(){
		$this->load->view('index/about.html');
	}
	/*载入约跑活动详情*/
	public function apDe(){
		$this->load->view('index/ap-de.html');
	}
	/*载入跑族故事编写*/
	public function editStory(){
		$this->load->view('index/edit-stroy.html');
	}
	/*载入id-card1*/
	public function idCard(){
		$this->load->view('index/id-card1');
	}
	/*载入新闻页*/
	public function Snew(){
		$this->load->view('index/new.html');
	}
	/*载入rank*/
	public function rank(){
		$this->load->view('index/rank.html');
	}
	/*载入ru-hand*/
	public function ruHand(){
		$this->load->view('index/ru-hand');
	}
	/*载入分享*/
	public function sharePoint(){
		$this->load->view('index/share-point.html');
	}
	/*载入发起约跑*/
	public function startAp(){
		$this->load->view('index/startAp');
	}
	/*载入跑族故事*/
	public function story(){
		$this->load->view('index/story.html');
	}
}
