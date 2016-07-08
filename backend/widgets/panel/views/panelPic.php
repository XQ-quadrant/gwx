<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-17
 * Time: 上午10:13
 */
use yii\helpers\Url;
use Yii;
?>

    <div class="<?=$css?>" >
        <div class="panel-title">
            <?=$title?>
            <?php if(isset($url)){
                ?>
                <ul class="panel-tools panel-tools-hover">
                    <li><a class="icon" href="<?=$url?>">更多</a></li>
                </ul>
            <?php
            }
            ?>

        </div>
        <div class="panel-body">
            <ul class="mailbox-inbox">
                <?php foreach ( $ac as $m):?>
                <li>
                    <a href="<?=Url::to(['/'.$model->tableName().'/view/','id'=>$m->id])?>" class="item clearfix">
                        <img src="<?=$m->pic?>" alt="img" class="img-news">
                        <span class="from"><h5><?=$m->title?></h5></span>
                        <?=$m->breviary?>
                        <span class="date"><?=Yii::$app->formatter->format($m->create_at, 'date')?></span>
                    </a>
                </li>
                <?php endforeach; ?>

            </ul>

        </div>
    </div>