<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['mytitle'] = '关于我们 | 杭州冠啸电子科技有限公司';
		$this->load->helper('url');
		$this->load->view('home.html',$data);
	}
}
