<?php
use yii\data\Pagination;
use yii\widgets\LinkPager;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-20
 * Time: 下午4:29
 */
$this->title = Yii::t('common', 'Achievements');
$this->params['breadcrumbs'][] = $this->title;

$count = $dataProvider->getCount();
$totalCount = $dataProvider->getTotalCount();
$pages = new Pagination([ 'totalCount' =>$totalCount, 'pageSize' => 10]);
$data = $dataProvider->getModels();
?>
<div class="row container">


        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active tab-title"><a href="#tab_1" data-toggle="tab" aria-expanded="true">论文</a></li>
                <li class="tab-title"><a href="#tab_2" data-toggle="tab" aria-expanded="false">专利</a></li>
                <li class="tab-title"><a href="http://www.sklse.whu.edu.cn/index.php/detail/fblw/58" aria-expanded="false">获奖</a></li>
                <li class="tab-title"><a href="#tab_3" data-toggle="tab" aria-expanded="false" >项目</a></li>
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        Dropdown <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </li>-->
                <li class="pull-right" style="width: 50%;"> <div class="input-group input-group-sm" style="padding: 5px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="搜索">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">


                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover table-tab">
                                <tbody><tr >
                                    <th class="tab-th">题目</th>
                                    <th class="tab-th">作者</th>
                                    <th class="tab-th">期刊/会议名称</th>
                                    <th class="tab-th">卷期页码</th>
                                    <th class="tab-th">发表时间</th>
                                    <th class="tab-th">备注</th>
                                </tr>
                                <?php foreach($data as $v){ ?>
                                    <tr>
                                        <td><?= $v['subject'] ?></td>
                                        <td><?= $v['author'] ?></td>
                                        <td><?= $v['periodical'] ?></td>
                                        <td><?= $v['serial_number'] ?></td>
                                        <td><?= $v['publish_at'] ?></td>
                                        <td><?= $v['hint'] ?></td>
                                    </tr>
                                <?php } ?>

                                </tbody>

                            </table>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix">
                            <?= LinkPager::widget([
                                'pagination' => $pages,
                            ]);?>
                        </div>

                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    The European languages are members of the same family. Their separate existence is a myth.
             f the resulting language is more simple
                    and regular than that of the individual languages.
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>

        <!-- /.box -->


</div>
