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
<ul class="nav nav-pills nav-stacked">
 <?php foreach($ac as $k=>$v){ ?>
  <li><a href="<?=$v->uri?>">
    <i class="fa fa-angle-right"></i><?=$v->name?>
   </a></li>
 <?php } ?>
 <!--<li class="active">
  <a href="#"><i class="fa fa-angle-right"></i> haha
   <span class="label label-primary pull-right">12</span></a></li>

 <li><a href="#"><i class="fa  fa-angle-right"></i> Junk <span class="label label-warning pull-right">65</span></a>
 </li>-->
</ul>
