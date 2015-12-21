<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <!DOCTYPE html>
    <html lang="zh-CN">

    <head>
        <?php $this->load->view('layout/head'); ?>
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>static/css/Icomoon/style.css">
    </head>

    <body>
        <?php $this->load->view('layout/header') ?>
        <?php $this->load->view('product/banner') ?>
        <?php $this->load->view('product/catalog') ?>
        <?php $this->load->view('layout/footer') ?>
        <script type="text/javascript" src="<?=base_url()?>static/js/pop-up-gallery.js"></script>
    </body>

    </html>
