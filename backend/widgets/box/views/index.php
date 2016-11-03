<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>
<!-- About Me Box -->
<div class="box <?=$css['warper']?>">
 <div class="box-header <?=$css['title']?>">
  <h3 class="box-title"><i class="<?=$css['icon']?>"></i><?=$title?></h3>
  <div class="box-tools pull-right">
   <!--<span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>-->
   <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
   </button>-->
   <!--<button type="button" class="btn btn-box-tool"  title="" >
    <i class="fa fa-comments"></i>更多</button>-->
  </div>
 </div>
 <!-- /.box-header -->
 <div class="box-body">
  <ul class="list-group list-group-unbordered">
   <?php foreach ( $ac as $m):?>
   <li class="list-group-item">
    <a class="box-item " href=" <?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>">
      <?=$m->title?>

     </a>
    <span class="text-muted pull-right"><?=Yii::$app->formatter->asDate($m->create_at,'M/dd')?></span>

   </li>
   <?php endforeach; ?>
  </ul>


 </div>
 <div class="box-footer text-center">
  <a href="<?=$url?>" class="uppercase"> 更 多... </a>
 </div>
 <!-- /.box-body -->
</div>
