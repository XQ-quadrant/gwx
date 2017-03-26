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
    <!--<a href="<?/*=$url*/?>" class="uppercase">
    <div class="box-header <?/*=$css['header']*/?> " style="">
        <h3 class="box-title <?/*=$css['title']*/?>"> </h3>

    </div></a>-->
    <div class="box-body <?=$css['body']?>">
        <ul class="products-list product-list-in-box" >
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

</div>
