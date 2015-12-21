<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['mytitle'] = '首页 | 杭州冠啸电子科技有限公司';
		$data['href'] = 'index';
		
		$this->load->helper('url');
		$this->load->view('home',$data);
	}
}
