<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
use yii\helpers\Url;
 ?>
<ul class="<?=$css?>">
 <li><a href="<?=Url::toRoute(['/cate'])?>"><span class="icon color7" style="font-size: small"><i class="fa fa-caret-square-o-down"></i></span>栏目设置<span class="label fa fa-cogs"> </span></a></li>

 <?php foreach($model as $li){
  //$view_date = json_decode($li->view_index); //定向到具体后台页面
  ?>
  <li><a href="<?=Url::toRoute([$view_date['route'],$view_date['date']['search'] => ['cate'=>$li->id]])?>"><?=$li->name?></a></li>
 <?php } ?>

</ul>
