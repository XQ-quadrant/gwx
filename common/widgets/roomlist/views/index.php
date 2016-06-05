<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>

<table class="table table-striped table-bordered table-advance table-hover">

 <!--<thead>

 <tr>

  <th><i class="icon-briefcase"></i> Company</th>

  <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>

  <th><i class="icon-bookmark"></i> Amount</th>

  <th></th>

 </tr>

 </thead>-->

 <tbody>
 <?php //var_dump($model)?>
 <?php foreach ( $model as $m):?>
 <tr>

  <td><a href="<?=Url::to('@web/room/view?id='.$m[ 'id']) ?>"><?= $m->title ?></a></td>


  <td><?= $m->price ?> 元 /月 <!--<span class="label label-success label-mini">Paid</span>--></td>

  <td><a class="btn mini green-stripe" href="<?=Url::to('@web/room/view?id='.$m[ 'id']) ?>">查看</a></td>

 </tr>
 <?php endforeach; ?>


 </tbody>

</table>