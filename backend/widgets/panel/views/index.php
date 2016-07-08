<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>

<div class="<?=$css?>" >
 <div class="panel-title">
  通 知 公 告
 </div>
 <div class="panel-body">

  <ul class="basic-list">
   <?php foreach ( $ac as $m):?>
   <li><a href=" <?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>">
     <?=$m->title?>
    </a></li>
   <?php endforeach; ?>

  </ul>

 </div>
</div>