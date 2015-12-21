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
        <?php $this->load->view('product/intro') ?>
        <?php $this->load->view('layout/footer') ?>
        <script type="text/javascript" src="<?=base_url()?>static/js/pop-up-gallery.js"></script>
        <script type="text/javascript">
            $(document).ready(function($) {
                var image = $(".intro-image img");
                image.hide();
                fadeInAll(image.length-1,0);
                function fadeInAll(n,index){
                    if(index == n){
                        $(".intro-image img:eq("+index+")").fadeIn(800);
                    }else{
                        $(".intro-image img:eq("+index+")").fadeIn(800,function(){
                            fadeInAll(n,index+1);
                        });
                    }
                }
            });
        </script>
    </body>

    </html>
