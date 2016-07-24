<?php
/**
 * @see Yii中文网  http://www.yii-china.com
 * @author Xianan Huang <Xianan_huang@163.com>
 * 图片上传组件
 * 如何配置请到官网（Yii中文网）查看相关文章
 */
 
use yii\helpers\Html;
?>
<div class="per_upload_con" data-url="<?=$config['serverUrl']?>">
    <input id='cc' up-id="<?=$attribute?>" type="hidden" name="<?=$inputName?>" upname='<?=$config['fileName']?>' value="<?=isset($inputValue)?$inputValue:''?>" filetype="img" />
</div>
<style>
    .container {
        width: 200px;
        margin: 40px 0 0 0;
        position: relative;
        font-family: 微软雅黑;
        font-size: 12px;
    }
    .container p {
        line-height: 12px;
        line-height: 0px;
        height: 0px;
        margin: 10px;
        color: #bbb
    }
    .action {
        width: 200px;
        height: 30px;
        margin: 10px 0;
    }
    .cropped {
        position: absolute;
        right: -180px;
        top: 0;
        width: 150px;
        border: 1px #ddd solid;
        height: 330px;
        padding: 4px;
        box-shadow: 0px 0px 12px #ddd;
        text-align: center;
    }
    .imageBox {
        position: relative;
        height: 200px;
        width: 200px;
        border: 1px solid #aaa;
        background: #fff;
        overflow: hidden;
        background-repeat: no-repeat;
        cursor: move;
        box-shadow: 4px 4px 12px #B0B0B0;
    }
    .imageBox .thumbBox {
        position: absolute;
        top: 12.5%;
        left: 12.5%;
        width: 150px;
        height: 150px;
        margin-top: 0px;
        margin-left: 0px;
        box-sizing: border-box;
        border: 1px solid rgb(102, 102, 102);
        box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
        background: none repeat scroll 0% 0% transparent;
    }
    .imageBox .spinner {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        text-align: center;
        line-height: 200px;
        background: rgba(0,0,0,0.7);
    }
    .Btnsty_peyton{
        float: right;
        width: 45px;
        display: inline-block;

        height: 45px;
        line-height: 45px;
        font-size: 15px;
        color: #FFFFFF;
        margin:0px 2px 5px;
        background-color: #7d95b6;
        border-radius: 3px;
        text-decoration: none;
        cursor: pointer;
        box-shadow: 0px 0px 5px #B0B0B0;
        border: 0px #fff solid;}
    /*选择文件上传*/
    .new-contentarea {
        width: 100px;
        overflow:hidden;
        margin: 0 auto;
        position:relative;float:left;
    }
    .new-contentarea label {
        width:100%;
        height:100%;
        display:block;
    }
    .new-contentarea input[type=file] {
        width:100px;
        height:45px;
        background:#333;
        margin: 0 auto;
        position:absolute;
        right:50%;
        margin-right:-94px;
        top:0;
        right/*\**/:0px\9;
        margin-right/*\**/:0px\9;
        width/*\**/:10px\9;
        opacity:0;
        filter:alpha(opacity=0);
        z-index:2;
    }
    a.upload-img{
        width:100px;
        display: inline-block;
        margin-bottom: 10px;
        height:45px;
        line-height: 45px;
        font-size: 14px;
        color: #FFFFFF;
        background-color: #7d95b6;
        border-radius: 3px;
        text-decoration:none;
        cursor:pointer;
        border: 0px #fff solid;
        box-shadow: 0px 0px 5px #B0B0B0;
    }
    a.upload-img:hover{
        background-color: #7d95b6;
    }

    .tc{text-align:center;}

</style>
<div class="container">
    <div class="imageBox">
        <div class="thumbBox"></div>
        <div class="spinner" style="display: none">Loading...</div>
    </div>
    <div class="action">
        <!-- <input type="file" id="file" style=" width: 200px">-->
        <div class="new-contentarea tc"> <a href="javascript:void(0)" class="upload-img">
                <label for="upload-file">上传图像</label>
            </a>
            <input type="file" class="" name="upload-file" id="upload-file" />
        </div>

        <input type="button" id="btnZoomIn" class="Btnsty_peyton" value="+"  >
        <input type="button" id="btnZoomOut" class="Btnsty_peyton" value="-" >
        <input type="button" id="btnCrop"  class="Btnsty_peyton" value="裁切">

    </div>
    <div class="cropped"></div>
</div>
<?php

//$this->registerJsFile('js/init.js',[]);
?>
