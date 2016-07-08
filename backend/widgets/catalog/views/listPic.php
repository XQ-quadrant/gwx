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
<ul class="nav nav-pills nav-stacked">
    <?php foreach($ac as $k=>$v){ ?>
        <li><a href="#">
                <i class="fa fa-angle-right"></i><?=$v->title?>
            </a></li>
    <?php } ?>
    <li class="active">
        <a href="#"><i class="fa fa-angle-right"></i> Inbox
            <span class="label label-primary pull-right">12</span></a></li>

    <li><a href="#"><i class="fa  fa-angle-right"></i> Drafts</a></li>
    <li><a href="#"><i class="fa  fa-angle-right"></i> Junk <span class="label label-warning pull-right">65</span></a>
    </li>
    <li><a href="#"><i class="fa  fa-angle-right"></i> Trash</a></li>
</ul>
