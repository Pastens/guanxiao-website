<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['mytitle'] = '产品介绍 | 杭州冠啸电子科技有限公司';
		$data['href'] = 'product';
		$data['location'] = '产品介绍';
		$data['banner_intro'] = "创新需要载体，创新平台可以让中学生与当前高新技术进行亲密接触，更可以让他们利用创新平台进行自主的创新性设计与拓展。学校可以进一步激发中学生的学习兴趣和创新激情，凝聚出更多创新科研成果。";
		$this->load->helper('url');
		$this->load->view('product.html',$data);
	}
}
