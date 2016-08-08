<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-8-7
 * Time: 上午3:35
 */
?>
<div class="chat-contacts" style="position:relative">
    <ul class="contacts-list">
        <?php foreach($userInfo as $v) { ?>
        <li>
            <a href="#">
                <img class="contacts-list-img" src="/adminlte/dist/img/user1-128x128.jpg" alt="User Image">

                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  <?= $v['username'] ?>
                                  <small class="contacts-list-date pull-right">2/28/2015</small>
                                </span>
                    <span class="contacts-list-msg">How have you been? I was...</span>
                </div>
            </a>
        </li>
        <?php } ?>

        <li>
            <a href="#">
                <img class="contacts-list-img" src="/adminlte/dist/img/user8-128x128.jpg" alt="User Image">

                <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  Kenneth M.
                                  <small class="contacts-list-date pull-right">1/4/2015</small>
                                </span>
                    <span class="contacts-list-msg">Never mind I found...</span>
                </div>
                <!-- /.contacts-list-info -->
            </a>
        </li>
    </ul>
</div>
