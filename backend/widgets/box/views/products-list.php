<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-17
 * Time: 上午10:13
 */
use yii\helpers\Url;
//use Yii;
?>
<div class="box <?=$css['warper']?>">
    <div class="box-header <?=$css['title']?>" style="background-image: url(//images/shipin1.gif)">
        <h4 class="box-title"><i class=""></i><?=$title?></h4>
        <div class="box-tools pull-right">
            <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>-->
            <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>-->
            <!--<button type="button" class="btn btn-box-tool"  title="" >
                <i class="fa fa-comments"></i>更多</button>-->
        </div>
    </div>
    <div class="box-body <?=$css['body']?>">
        <ul class="products-list product-list-in-box">
            <?php foreach ( $ac as $m):?>
            <li class="item">
                <div class="product-img">
                    <img src="<?=$m->pic?>" alt="Product Image">
                </div>
                <div class="product-info">
                    <a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>" class="product-title">
                        <?=$m->title?>
                        <!--<span class=" pull-left">800</span>--></a>
                        <span class="product-description">
                          <?=$m->breviary?>
                        </span>
                </div>
            </li>
            <?php endforeach; ?>
            <!-- /.item -->

        </ul>

    </div>
    <div class="box-footer text-center">
        <a href="<?=$url?>" class="uppercase"> 更 多 </a>
    </div>
    <!-- /.box-body -->
</div>
