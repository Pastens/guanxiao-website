<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <section class="product-banner container-fluid">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?=base_url()?>index.php/product">产品</a></li>
                <li class="active">
                    <?=$location?>
                </li>
            </ol>
            <div class="col-xs-7">
                <p>
                    <?=$banner_intro?>
                </p>
                <a class="btn btn-default pull-right" href="<?=base_url()?>index.php/product/<?=($location=="产品介绍" ? "catalog":"news")?>" role="button"><?=($location=="产品介绍" ? "查看产品目录":"了解产品新闻")?></a>
            </div>
        </div>
    </section>
