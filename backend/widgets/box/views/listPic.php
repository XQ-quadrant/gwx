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
    <div class="box-header <?=$css['title']?>">
        <h4 class="box-title"><?=$title?></h4>
        <div class="box-tools pull-right">
            <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>-->
            <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>-->
            <!--<button type="button" class="btn btn-box-tool"  title="" >
                <i class="fa fa-comments"></i>更多</button>-->
        </div>
    </div>
    <div class="box-body <?=$css['body']?>">
        <?php foreach ( $ac as $m):?>
        <div class="attachment-block clearfix">

            <img class="attachment-img" src="<?=$m->pic?>" alt="Attachment Image">

            <div class="attachment-pushed">
                <h4 class="attachment-heading" style="font-size: 15px"><a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>"><?=$m->title?></a></h4>

                <div class="attachment-text">
                    <?=$m->breviary?>
                </div>
                <!-- /.attachment-text -->
            </div>
            <!-- /.attachment-pushed -->

        </div>
        <?php endforeach; ?>
    </div>
    <div class="box-footer text-center">
        <a href="javascript:void(0)" class="uppercase"> 更 多 </a>
    </div>
    <!-- /.box-body -->
</div>
