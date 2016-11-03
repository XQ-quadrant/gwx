<?php

/*
 * This file is part of the Dektrium project.
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var \dektrium\user\models\Profile $profile
 */

$this->title = empty($profile->name) ? Html::encode($profile->user->username) : Html::encode($profile->name);
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile('/adminlte/plugins/social/friend.js',['depends'=>'backend\assets\AdminLteAsset','position'=>\yii\web\View::POS_END]);
?>
<div class="row">
    <div class="col-md-3">
        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <?= Html::img($profile->gravatar_email, [
                    'class' => 'img-rounded img-responsive profile-user-img img-responsive img-circle',
                    'alt'   => $profile->user->username,
                ]) ?>
<!--                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
-->
                <h3 class="profile-username text-center"><?= $this->title ?></h3>
                <?php if (!empty($profile->bio)): ?>
                    <p class="text-muted text-center"><?= Html::encode($profile->bio) ?></p>
                <?php endif; ?>


                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        报告 <a class="pull-right">5</a>
                    </li>
                    <li class="list-group-item">
                        论文 <a class="pull-right">3</a>
                    </li>
                    <li class="list-group-item">
                        专利 <a class="pull-right">0</a>
                    </li>
                </ul>

                <a data-user="<?= $id ?>" class="follow btn btn-primary btn-block"><b>关注</b></a>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">关于</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p><i class="fa fa-book margin-r-5"></i> 教育</p>

                <p class="text-muted">
                    西南交通大学，信息科学与技术学院，软件工程
                </p>

                <hr>

                <p><i class="fa fa-map-marker margin-r-5"></i> 地区</p>

                <p class="text-muted"><?= Html::encode($profile->location) ?></p>

                <hr>

                <p><i class="fa fa-pencil margin-r-5"></i> 技能</p>

                <p>
                    <span class="label label-primary">UI设计</span>

                    <span class="label label-primary">Python</span>
                    <span class="label label-primary">Javascript</span>
                    <span class="label label-primary">PHP</span>
                </p>

                <hr>

            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="col-md-8">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">动态</a></li>
                <li><a href="#timeline" data-toggle="tab">时光轴</a></li>
                <li><a href="#settings" data-toggle="tab">设置</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/adminlte/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">文献推荐 </a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">Dr.Jonathan Burke - 7:30 PM today</span>
                        </div>
                        <!-- /.user-block -->
                        <p>新书：
                            《计算机程序的构造和解释 : 原书第2版》、
                            《算法导论》、
                            《深入理解计算机系统》、
                            《MacTalk·人生元编程》、</p>
                        <p>
                            要求：深入理解，随意敷衍

                        </p>
                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                    (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">代码规范3.1（修正）</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">吴一通副教授 - 3 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                            Lorem ipsum represents a long-held tradition for designers,
                            typographers and the like. Some people hate it and argue for
                            its demise, but others ignore the hate as they create awesome

                        </p>

                        <form class="form-horizontal">
                            <div class="form-group margin-bottom-none">
                                <div class="col-sm-9">
                                    <input class="form-control input-sm" placeholder="Response">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="post clearfix">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/adminlte/dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">第二周学习计划（8/13-8/21）</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">邱咪咪 </span>
                        </div>
                        <!-- /.user-block -->
                        <p>  仿真文献： 《算法导论》 第二章p23, 猫狗同笼算法</p>
                        <p>  精读文献： 《算法导论》 第二章，第三章</p>
                        <p>  预期成果： xxx，实现阿猫阿狗类算法的熟练使用</p>

                        <form class="form-horizontal">
                            <div class="form-group margin-bottom-none">
                                <div class="col-sm-9">
                                    <input class="form-control input-sm" placeholder="意见。。">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">评价</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Post -->
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="/adminlte/dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">Posted 5 photos - 5 days ago</span>
                        </div>
                        <!-- /.user-block -->
                        <div class="row margin-bottom">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="/adminlte/dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="/adminlte/dist/img/photo2.png" alt="Photo">
                                        <br>
                                        <img class="img-responsive" src="/adminlte/dist/img/photo3.jpg" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-6">
                                        <img class="img-responsive" src="/adminlte/dist/img/photo4.jpg" alt="Photo">
                                        <br>
                                        <img class="img-responsive" src="/adminlte/dist/img/photo1.png" alt="Photo">
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <ul class="list-inline">
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                            <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                            </li>
                            <li class="pull-right">
                                <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                                    (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-envelope bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                                <div class="timeline-body">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                    quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Read more</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-user bg-aqua"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                                </h3>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-comments bg-yellow"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                                <div class="timeline-body">
                                    《MacTalk·人生元编程》是一本随笔文集，主要内容来自作者的微信公众平台 【MacTalk By 池建强】。

                                    MacTalk 成书主要来自读者的热情邀约，作者重新对文章进行了梳理，对内容进行增补、删减和校对，形成了五大主题共计五十二篇文章，这五个主题包括：Mac、程序员与编程、科技与人文、人物、工具。每篇文章独立成文，读者可利用碎片时间随机阅读。

                                    另外，作者对原来散落在各篇文章中的 Mac 技巧进行了统一的整理和规划，总结了130个Mac使用技巧。如果您是 Mac 用户，绝对不可错过，长知识的同时，还能提高工作效率。

                                    本书非常荣幸的邀请到了冯大辉先生做序，他是微信公众平台 【小道消息】的作者，MacTalk 在写作的过程中得到了冯大辉先生的诸多帮助，在此一并谢过。

                                    池建强，70后程序员，Blogger，微信平台 MacTalk 作者。先后任职洪恩软件和用友集团，从事互联网和企业应用软件研发，目前担任瑞友科技IT应用研究院技术负责人。 热爱技术和编码工作，Apple 和 Google 产品重度用户，分享技术，坚持梦想。
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-camera bg-purple"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                                <div class="timeline-body">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>

