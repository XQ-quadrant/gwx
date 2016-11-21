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
 <a href="<?=$url?>" >
 <div class="box-header <?=$css['header']?>" style="">
  <i class="<?=$css['icon']?>"></i>

  <h3 class="box-title <?=$css['title']?>"><?=$title?> </h3>
  <div class="box-tools pull-right">
   <span data-toggle="tooltip"  class="badge  index-box-more" ><?= Yii::t('common','more')?></span>

  </div>
 </div></a>
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

 <!-- /.box-body -->
</div>
