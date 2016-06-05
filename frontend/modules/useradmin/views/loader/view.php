<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Loader */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => ' / 房东 / ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
?>
<div class="tabbable tabbable-custom tabbable-full-width">



    <div class="tab-pane row-fluid active sale-summary" id="tab_1_1">

        <ul class="unstyled profile-nav span3">

            <li><img src="../../media/image/profile-img.png" alt="" /> <!--<a href="#" class="profile-edit">edit</a>--></li>

            <li>

                <span class="sale-info">微博 <i class="icon-weibo"></i></span>

                <span class="sale-num"><?=$model->weibo ?></span>

            </li>

            <li>

                <span class="sale-info">电话 <i class="icon-phone"></i></span>

                <span class="sale-num"><?=$model->tel ?></span>

            </li>

            <!-- <li>

                 <span class="sale-info">TOTAL SOLD</span>

                 <span class="sale-num">2377</span>

             </li>

             <li>

                 <span class="sale-info">EARNS</span>

                 <span class="sale-num">$37.990</span>

             </li>-->



        </ul>


        <div class="span9">

            <div class="row-fluid">

                <div class="span8 profile-info">

                    <h1><?=$model->name ?></h1>

                    <p><?=$model->infro ?> </p>

                    <hr>

                    <!--<ul class="unstyled inline">

                        <li><i class="icon-map-marker"></i> Spain</li>

                        <li><i class="icon-calendar"></i> 18 Jan 1982</li>

                        <li><i class="icon-briefcase"></i> Design</li>

                        <li><i class="icon-star"></i> Top Seller</li>

                        <li><i class="icon-heart"></i> BASE Jumping</li>

                    </ul>-->

                </div>

                <!--end span8-->

                <!--<div class="span4">

                    <div class="portlet sale-summary">

                        <div class="portlet-title">

                            <div class="caption">Sales Summary</div>

                            <div class="tools">

                                <a class="reload" href="javascript:;"></a>

                            </div>

                        </div>

                        <ul class="unstyled">

                            <li>

                                <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span>

                                <span class="sale-num">23</span>

                            </li>

                            <li>

                                <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span>

                                <span class="sale-num">87</span>

                            </li>

                            <li>

                                <span class="sale-info">TOTAL SOLD</span>

                                <span class="sale-num">2377</span>

                            </li>

                            <li>

                                <span class="sale-info">EARNS</span>

                                <span class="sale-num">$37.990</span>

                            </li>

                        </ul>

                    </div>

                </div>-->

                <!--end span4-->

            </div>

            <!--end row-fluid-->

            <div class="tabbable tabbable-custom tabbable-custom-profile">

                <ul class="nav nav-tabs">

                    <li class="active"><a href="#tab_1_11" data-toggle="tab">房屋</a></li>



                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="tab_1_11">

                        <div class="portlet-body" style="display: block;">
                            <?= \common\widgets\roomlist\RoomListWidget::widget(['id'=>$model->user_id])?>
                            <table class="table table-striped table-bordered table-advance table-hover">

                                <thead>

                                <tr>

                                    <th><i class="icon-briefcase"></i> Company</th>

                                    <th class="hidden-phone"><i class="icon-question-sign"></i> Descrition</th>

                                    <th><i class="icon-bookmark"></i> Amount</th>

                                    <th></th>

                                </tr>

                                </thead>

                                <tbody>

                                <tr>

                                    <td><a href="#">Pixel Ltd</a></td>

                                    <td class="hidden-phone">Server hardware purchase</td>

                                    <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>

                                    <td><a class="btn mini green-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td>

                                        <a href="#">

                                            Smart House

                                        </a>

                                    </td>

                                    <td class="hidden-phone">Office furniture purchase</td>

                                    <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>

                                    <td><a class="btn mini blue-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td>

                                        <a href="#">

                                            FoodMaster Ltd

                                        </a>

                                    </td>

                                    <td class="hidden-phone">Company Anual Dinner Catering</td>

                                    <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>

                                    <td><a class="btn mini blue-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td>

                                        <a href="#">

                                            WaterPure Ltd

                                        </a>

                                    </td>

                                    <td class="hidden-phone">Payment for Jan 2013</td>

                                    <td>610.50$ <span class="label label-danger label-mini">Overdue</span></td>

                                    <td><a class="btn mini red-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td><a href="#">Pixel Ltd</a></td>

                                    <td class="hidden-phone">Server hardware purchase</td>

                                    <td>52560.10$ <span class="label label-success label-mini">Paid</span></td>

                                    <td><a class="btn mini green-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td>

                                        <a href="#">

                                            Smart House

                                        </a>

                                    </td>

                                    <td class="hidden-phone">Office furniture purchase</td>

                                    <td>5760.00$ <span class="label label-warning label-mini">Pending</span></td>

                                    <td><a class="btn mini blue-stripe" href="#">View</a></td>

                                </tr>

                                <tr>

                                    <td>

                                        <a href="#">

                                            FoodMaster Ltd

                                        </a>

                                    </td>

                                    <td class="hidden-phone">Company Anual Dinner Catering</td>

                                    <td>12400.00$ <span class="label label-success label-mini">Paid</span></td>

                                    <td><a class="btn mini blue-stripe" href="#">View</a></td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>



                </div>

            </div>

        </div>

        <!--end span9-->

    </div>

    <!--end tab-pane-->


</div>

