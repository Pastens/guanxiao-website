<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['mytitle'] = '产品介绍 | 杭州冠啸电子科技有限公司';
		$data['href'] = 'product';
		$data['location'] = '产品介绍';
		$data['banner_intro'] = "你好呀";
		$this->load->helper('url');
		$this->load->view('product.html',$data);
	}
}
