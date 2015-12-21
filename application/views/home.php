<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!DOCTYPE html>
    <html lang="zh-CN">

    <head>
        <?php $this->load->view('layout/head'); ?>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/css/Icomoon/style.css">
    </head>

    <body>
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('home/slider') ?>
        <?php $this->load->view('home/newslist') ?>
        <?php $this->load->view('home/banner') ?>
        <?php $this->load->view('home/intro') ?>
        <?php $this->load->view('layout/footer') ?>
        <script type="text/javascript" src="<?=base_url()?>static/js/pop-up-gallery.js"></script>
        <script type="text/javascript">
	        $('.carousel').carousel({
	            interval: 8000
	        });
	    </script>
    </body>

    </html>
