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
<div class="box <?=$css['warper']?>"><a href="<?=$url?>" class="uppercase">
    <div class="box-header <?=$css['header']?>">
        <i class="<?=$css['icon']?>"></i>

        <h3 class="box-title <?=$css['title']?> text-white"><?=$title?> </h3>
        <div class="list-news-bg"></div>
        <div class="box-tools pull-right">
            <span data-toggle="tooltip"  class="badge  index-box-more" >更多</span>
            <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>-->
            <!--<button type="button" class="btn btn-box-tool"  title="" >
                <i class="fa fa-comments"></i>更多</button>-->
        </div>
    </div></a>
    <div class="box-body <?=$css['body']?>">
        <?php foreach ( $ac as $m):?>
        <div class="attachment-block ">

            <img class="attachment-img" src="<?=$m->pic?>" alt="Attachment Image">

            <div class="attachment-pushed">
                <h4 class="attachment-heading" style="font-size: 15px"><a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"><?=$m->title?></a></h4>

                <div class="attachment-text">
                    <?=$m->breviary?>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

    <!-- /.box-body -->
</div>
